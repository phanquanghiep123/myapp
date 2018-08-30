<?php 
namespace App\Http\Controllers\Core;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;
class BackendController extends Controller
{
    public $_USER       = null;
    public $_ROUTE_FIX  = "backend";
    public $_FOLDER_FIX = "backend";
    public $_URLFIX     = "backend/";
    public $_VIEWFOLDER = "backend/";
    public $_VIEWS      = [];
    public $_URL        = "backend/";
    public $_DATA       = [];
    public $_HEADER     = "";
    public $_FOOTER     = "";
    public $_MODULE     = null;
    public $_PAGINGNUMBER = 30;
    public $_ROLNAME    = [
        "add"      => ["add","create","save","update","store"],
        "delete"   => ["delete","remove","destroy"],
        "view"     => ["show","view","review","index"],
        "update"   => ["edit","update"]
    ];

    private $_COMMONROUTE  = [];
    private $_VIEWADD      = "/create";
    private $_VIEWEDIT     = "/edit";
    private $_VIEWLIST     = "/lists";
    private $_VIEWADDAJAX  = "/ajaxaddform";
    private $_VIEWEDITAJAX = "/ajaxeditform";
    public  $_MODEL    = null;
    public  $_TABLE    = null;
    public function __construct()
    {   $this->_DATA["_SEFF"]      = $this;
        $this->_DATA["_PAGETILE"]  = "Backend";
        $this->_DATA["_ADMINMENU"] = "";
        $this->_COMMONROUTE = [
            $this->_ROUTE_FIX.".dashboard",
            $this->_ROUTE_FIX.".dashboard.logout",
            $this->_ROUTE_FIX.".dashboard.notallow",
            $this->_ROUTE_FIX.".dashboard.notallowajax"
        ];
        $this->_HEADER = $this->_VIEWFOLDER."layouts/header";
        $this->_FOOTER = $this->_VIEWFOLDER."layouts/footer";
        $this->middleware(function ($request, $next) {
            $this->_USER = session('_USER');
            $AllowURL = $this->_validateRULE(@$this->_USER->role_id);
            if($AllowURL == false){
                if(\Request::ajax() == false){
                    return Redirect(route($this->_ROUTE_FIX.".dashboard.notallow"));  
                }else{
                    return Redirect(route($this->_ROUTE_FIX.".dashboard.notallowajax")); 
                }   
            }
            $this->_DATA["_BACKURL"]   = $this->lookget_BACKURL();
            $this->_DATA["_ADMINMENU"] = $this->_ADMINMENU($this->_ADMINMODULES());
            if(\Request::isMethod('get')){
                $this->add_BACKURL();  
            } 
            return $next($request);
        });
        
    }
    public function _ListItem ($table){
        $this->_DATA["table"]  = $table;
        $this->_DATA["models"] = $this->_MODEL;
        return view($this->_VIEWFOLDER."commons".$this->_VIEWLIST,$this->_DATA);
    }
    public function _CreateItem($form){
        $this->_DATA["form"] = $form;
        \Request::session()->forget('_FROM');
        session([ '_FROM' => $this->_DATA["form"]]);
        if(\Request::ajax() == false){
            return view($this->_VIEWFOLDER."commons".$this->_VIEWADD,$this->_DATA);
        }else{  
            return \Response::json(array(  
                "status"    => "success",
                "data"      => \View::make($this->_VIEWFOLDER."commons".$this->_VIEWADDAJAX,$this->_DATA)->render()
            ));  
        }   
    }
    public function _EditItem($form){
        $this->_DATA["form"] = $form;
        session([ '_FROM' => $this->_DATA["form"]]);
        if(\Request::ajax() == false){
            return view($this->_VIEWFOLDER."commons".$this->_VIEWEDIT,$this->_DATA);
        }else{  
            return \Response::json(array(  
                "status"    => "success",
                "data"      => \View::make($this->_VIEWFOLDER."commons".$this->_VIEWEDITAJAX,$this->_DATA)->render()
            ));  
        }

    }
    public function _DestroyItem (){
        $data = ["status" => "error","_redirect" => null,"data" => null,"message" => ""];
        $this->_MODEL->delete();
        if(@$this->_DATA["_CTS_redirect"]){
            $data["_redirect"] = $this->_DATA["_CTS_redirect"];
        }else{
            $data["_redirect"] = route($this->_DATA["_BACKURL"]);
        }
        $data["status"] = "success";
        return \Response::json($data);
    }
    public function _StoreItem($request){
        $data = ["status" => "error","_redirect" => $this->_URL,"data" => null,"message" => ""];
        $validates = [];
        $listColums = $this->_GetTableColumns($this->_TABLE);
        $this->_DATA["_FROM"] = session('_FROM');
        if($this->_DATA["_FROM"]){
            foreach ($this->_DATA["_FROM"] as $key => $value) {
                if($value["type"] != "file"){
                    if(in_array($key, $listColums)){
                        if(@$value["required"] == true)
                            $validates[$key] = "required";
                        if(@$value["validate"]){
                            if(@$validates[$key]){
                                $validates[$key] .= "|".$value["validate"];
                            }else{
                                $validates[$key] = $value["validate"];
                            }
                        } 
                        if (@$validates[$key]);
                            $validates[$key] = str_replace("required|required","required", @$validates[$key] );
                        if(@$value["type"] == "password"){
                            if(trim(@$request->{$key}) != "" && @$request->{$key} != null) 
                                $this->_MODEL->{$key} = bcrypt($request->{$key});
                        }else{
                            $this->_MODEL->{$key} = @$request->{$key} === null ? '' : $request->{$key};
                        }   
                    }
                }else{
                    if(in_array($key, $listColums)){
                        if(@$value["required"] == true){
                            $validates[$key] = "required";
                        }
                        if(@$value["validate"]){
                            if(@$validates[$key]){
                                $validates[$key] .= "|".$value["validate"];
                            }else{
                                $validates[$key] = $value["validate"];
                            }
                        }
                        if ($request->hasFile($key)) {  
                            $file = $request->{$key};
                            $path = $file->move('uploads', uniqid (). '-' .$file->getClientOriginalName());
                            $this->_MODEL->{$key} = $path;
                        }  
                    }
                }    
            }
            $check = \Validator::make($request->all(),$validates);
            if($check->fails() == false){
                $this->_MODEL->save();
                if(@$this->_DATA["_CTS_redirect"]){
                    $this->_DATA["_CTS_redirect"] = str_replace("{is}",$this->_MODEL->id,$this->_DATA["_CTS_redirect"]);
                    $data["_redirect"] = $this->_DATA["_CTS_redirect"];
                }else{
                    $data["_redirect"] = route($this->_ROUTE_FIX.".".$this->_ROUTE.".edit",["id" => $this->_MODEL->id]);
                }
                $data["status"] = "success";
                \Request::session()->forget('_FROM');
            }else{
               $data["message"] = $check->errors();
            } 
            $data["validates"] = $validates;
            $data["_FROM"] = $this->_DATA["_FROM"];
        }
        return \Response::json($data);
        
    }
    public static function _GeneratorHTML($key,$item) {
        $html = "";
        $attr = "";
        if(@$item["attr"] != null){
            foreach (@$item["attr"] as $key_attr => $value_attr) {
                $attr .= $key_attr ."=".'"'.$value_attr.'"';
            }
        }
        switch (@$item["type"]) {
            case 'checkbox':
                $html .= '<div class="form-group m-form__group row"><label class="label" for="'.$key.'">'.@$item["label"].':</label></div><div class="col-md-8">';
                if(@$item["options"] != null){
                    foreach (@$item["options"] as $value) {
                        if(is_array(@$item["value"])){
                            $checked = (in_array(@$value[@$item["options_value"]], @$item["value"])) ? "checked" : "";
                        }else{
                            $checked = (@$value[@$item["options_value"]] == @$item["value"]) ? "checked" : "";
                        } 
                        $html .= '<input '.$attr.' placeholder="'.@$item["label"].'" type="checkbox" name="'.$key.'" id="'.$key.'-'.@$value[@$item["options_value"]].'" class="filled-in chk-col-green" value="'.@$value[@$item["options_value"]].'" '.$checked.' '.(@$item["required"] == true ? 'required aria-required="true"' : '').'/>';
                    }
                }
                $html .='</div></div>';
            break;
            case 'select':
                $html .= '<div class="form-group m-form__group row"><div class="col-md-4"><label class="label" for="'.$key.'">'.@$item["label"].':</label></div><div class="col-md-8"><select '.$attr.' class="form-control show-tick" name="'.$key.'" '.(@$item["required"] == true ? 'required aria-required="true"' : '').'><option value="">-- Please select '.@$item["label"].' --</option>';
                if(@$item["options"] != null){
                    foreach (@$item["options"] as $value) {
                        if(is_array(@$item["value"])){
                            $selected = (in_array(@$value[@$item["options_value"]], @$item["value"])) ? "selected" : "";
                        }else{
                            $selected = (@$value[@$item["options_value"]] == @$item["value"]) ? "selected" : "";
                        } 
                        $html .= '<option value="'.@$value[@$item["options_value"]].'" '.$selected.'>'.@$value[@$item["options_label"]].'</option>';
                    }
                }
                $html .='</select><div class="server-error none error" id="server-'.$key.'"></div></div></div>';
            break;
            case 'radio':
                $html .= '<div class="form-group m-form__group row"><div class="col-md-4"><label class="label" for="'.$key.'">'.@$item["label"].':</label></div><div class="col-md-8"><select '.$attr.' class="form-control show-tick" name="'.$key.'" '.(@$item["required"] == true ? 'required aria-required="true"' : '').'><option value="">-- Please select '.@$item["label"].' --</option>';
                if(@$item["options"] != null){
                    foreach (@$item["options"] as $value) {
                        if(is_array(@$item["value"])){
                            $selected = (in_array(@$value[@$item["options_value"]], @$item["value"])) ? "selected" : "";
                        }else{
                            $selected = (@$value[@$item["options_value"]] == @$item["value"]) ? "selected" : "";
                        } 
                        $html .= '<option value="'.@$value[@$item["options_value"]].'" '.$selected.'>'.@$value[@$item["options_label"]].'</option>';
                    }
                }
                $html .='</select><div class="server-error none error" id="server-'.$key.'"></div></div></div>';
            break;
            case 'date':
                $html = '<div class="form-group m-form__group row"><div class="col-md-4"><label class="label" for="'.$key.'">'.@$item["label"].':</label></div><div class="col-md-8">
                    <div class="input-group date">
                        <input '.$attr.' type="text" class="form-control m-input m_datetimepicker_6" placeholder="Please choose a date..." value="'.@$item["value"].'" '.(@$item["required"] == true ? 'required aria-required="true"' : '').' id="'.$key.'" readonly>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-calendar glyphicon-th"></i>
                            </span>
                        </div>
                    </div>
                 </div></div>';
            break;
            case 'datetime':
                $html = '<div class="form-group m-form__group row"><div class="col-md-4"><label class="label" for="'.$key.'">'.@$item["label"].':</label></div><div class="col-md-8">
                    <div class="input-group date">
                        <input '.$attr.' type="text" class="form-control m-input m_datetimepicker_3" placeholder="Please choose a date..." value="'.@$item["value"].'" '.(@$item["required"] == true ? 'required aria-required="true"' : '').' id="'.$key.'" readonly>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-calendar glyphicon-th"></i>
                            </span>
                        </div>
                    </div>
                 </div></div>';
            break;
            case 'time':
                $html = '<div class="form-group m-form__group row"><div class="col-md-4"><label class="label" for="'.$key.'">'.@$item["label"].':</label></div><div class="col-md-8">
                    <div class="input-group date">
                        <input '.$attr.' type="text" class="form-control m-input m_datetimepicker_7" placeholder="Please choose a date..." value="'.@$item["value"].'" '.(@$item["required"] == true ? 'required aria-required="true"' : '').' id="'.$key.'" readonly>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-calendar glyphicon-th"></i>
                            </span>
                        </div>
                    </div>
                 </div></div>';
            break;
            case 'multiple':
                $html = '<div class="form-group m-form__group row"><div class="col-md-4"><label class="label" for="'.$key.'">'.@$item["label"].':</label></div><div class="col-md-8"><select multiple '.$attr.' class="form-control show-tick" name="'.$key.'[]" '.(@$item["required"] == true ? 'required aria-required="true"' : '').'><option value="">-- Please select '.@$item["label"].' --</option>';
                if(@$item["options"] != null){
                    foreach (@$item["options"] as $value) {
                        if(is_array(@$item["value"])){
                            $selected = (in_array(@$value[@$item["options_value"]], @$item["value"])) ? "selected" : "";
                        }else{
                            $selected = (@$value[@$item["options_value"]] == @$item["value"]) ? "selected" : "";
                        } 
                        $html .= '<option value="'.@$value[@$item["options_value"]].'" '.$selected.'>'.@$value[@$item["options_label"]].'</option>';
                    }
                }
                $html .='</select><div class="server-error none error" id="server-'.$key.'"></div></div></div>';
            break;
            case 'file':
                $html = '<div class="form-group m-form__group row"><div class="col-md-4"><label class="label" for="'.$key.'">'.@$item["label"].':</label></div><div class="col-md-8">
                    <div class="form-group">
                        <div class="form-line">
                            <input '.$attr.' id="choose-file" type="file" name="'.$key.'" class="form-control" placeholder="Please choose a file" '.(@$item["required"] == true ? 'required aria-required="true"' : '').'>
                            <div class="server-error none error" id="server-'.$key.'"></div>
                            <a id="view-file" data-src="'.@$item["value"].'" href="javascript:;">View file<a/>
                        </div>
                    </div>
                 </div></div>';
            break;
            case 'texarea':
                $html = '<div class="form-group m-form__group row"><div class="col-md-4"><label class="label" for="'.$key.'">'.@$item["label"].':</label></div><div class="col-md-8">
                    <div class="form-group">
                        <div class="form-line">
                            <textarea '.$attr.' name="'.$key.'" class="not-editor form-control" placeholder="Please choose a file" '.(@$item["required"] == true ? 'required aria-required="true"' : '').'>'.@$item["value"].'</textarea>
                            <div class="server-error none error" id="server-'.$key.'"></div>
                        </div>
                    </div>
                 </div></div>';
            break;
            case 'editor':
                $html = '<div class="form-group m-form__group row"><div class="col-md-4"><label class="label" for="'.$key.'">'.@$item["label"].':</label></div><div class="col-md-8">
                    <div class="form-group">
                        <div class="form-line">
                            <textarea '.$attr.' id="editor" type="file" name="'.$key.'" class="form-control" placeholder="Please choose a file" '.(@$item["required"] == true ? 'required aria-required="true"' : '').'>'.@$item["value"].'</textarea>
                            <div class="server-error none error" id="server-'.$key.'"></div>
                        </div>
                    </div>
                 </div></div>';
            break;
            case 'hidden':
                $html = '<input '.$attr.' type="hidden" class="form-control" name="'.$key.'" '.(@$item["required"] == true ? 'required aria-required="true"' : '').' value="'.@$item["value"].'">';
            break;
            default:
                $html = '<div class="form-group m-form__group row"><div class="col-md-4"><label class="label" for="'.$key.'">'.@$item["label"].':</label></div><div class="col-md-8">
                    <div class="form-line">
                        <input '.$attr.' placeholder="Plase enter '.@$item["label"].'" type="'.@$item["type"].'" class="form-control" name="'.$key.'" '.(@$item["required"] == true ? 'required aria-required="true"' : '').' value="'.@$item["value"].'">
                        <div class="server-error none error" id="server-'.$key.'"></div>
                    </div>
                </div></div>';
            break;
        }
        return $html;
    }
    public function _GetTableColumns($table)
    {
        return DB::getSchemaBuilder()->getColumnListing($table);
    }
    public function checkInvalModels(){

    }
    private function add_BACKURL (){
        $fullUrl = \Request::fullUrl();
        $backcurrent_url = session('_BACKURL');
        if($backcurrent_url !=null && count($backcurrent_url) > 20){
            unset ($backcurrent_url[0]);
        }
        if($backcurrent_url != null){
            foreach ($backcurrent_url as $key => $value) {
                if($value != $fullUrl){
                    $arg_url[] = $value;
                }
            }
        }
        $arg_url [] = $fullUrl;
        \Request::session()->forget('_BACKURL');
        session(['_BACKURL' => $arg_url]);
    }
    private function lookget_BACKURL(){
        $arg = session('_BACKURL');
        if($arg != null){
            for ($i = (count($arg) - 1); $i > 0 ; $i--) { 
                if($arg[$i] != \Request::fullUrl()){
                    $url = $arg[$i];
                    unset ($arg[$i]);
                    session(['_BACKURL' => $arg]);
                    return $url;
                }
            }
        }
        return asset($this->_URL); 
    }
    public function _ADMINMODULES(){
        $menu  = \App\Models\Menus::where("slug","=","backend-menus")->first();
        $models = \App\Models\MenuItems::where([
            ["role_allow","like","%/".$this->_USER->role_id."/%"],
            ["menu_id","=",@$menu->id]
        ])->orderby("sort")->get();
        return $models->toArray();
    }
    private function _ADMINMENU ($data,$id = 0){
        $termsList = array();
        $new_listdata = array();
        if ($data != null) { 
            foreach ($data AS $key => $item )
            {
                if ($item['pid'] == $id)
                {
                    $termsList[] = ($item);
                }
                else
                {
                    $new_listdata[] = ($item);
                }
            }
        }
        if ($termsList != null)
        {   if($id == 0){
                $this->_DATA["_ADMINMENU"] .= '<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">';
            }else{
                $this->_DATA["_ADMINMENU"] .= '<div class="m-menu__submenu " style="display: none;"> <span class="m-menu__arrow"></span><ul class="m-menu__subnav">';
            }
            foreach ($termsList AS $key => $item_2 )
            {
                $url = $this->_URLFIX.$item_2["path"];
                $url = str_replace("////","/", $url);
                $url = str_replace("///","/", $url);
                $url = str_replace("//","/", $url);
                if(@$item_2["show"] != "no"){
                    $url = ($item_2["path"] == "#" || $item_2["path"] == "") ? ' href="#"' : ' href="'.asset($url).'"';
                    $this->_DATA["_ADMINMENU"] .= '<li class="m-menu__item m-menu__item--submenu '.$item_2["class_name"].'" aria-haspopup="true" data-menu-submenu-toggle="hover">';
                    if($id == 0){
                         $this->_DATA["_ADMINMENU"] .='<a href="#" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon '.$item_2["icon"].'"></i>
                            <span class="m-menu__link-text">'.$item_2["name"].'</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>';
                    }else{
                        $this->_DATA["_ADMINMENU"] .= '
                        <a '.$url.' class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                            <span class="m-menu__link-text">'.$item_2["name"].'</span>
                        </a>';
                    }
                    $this->_ADMINMENU ($new_listdata, $item_2['id']);
                    $this->_DATA["_ADMINMENU"] .= '</li>';
                }  
            }
            if($id == 0){
                $this->_DATA["_ADMINMENU"] .= "</ul>";
            }else{
                $this->_DATA["_ADMINMENU"] .= "</ul></div>";
            }
           
        }
        return $this->_DATA["_ADMINMENU"];
    }
    public function _validateRULE($role = null){
        $nameRoute =  \Route::currentRouteName();
        if(in_array($nameRoute, $this->_COMMONROUTE)) return true;
        $path = \Route::current()->uri;
        $path = explode ("{",$path);
        $path = $path[0];
        $path = str_replace($this->_URLFIX,"", $path);
        $path = explode("/",$path);
        $firstPath = $path[0];
        $path = array_diff ($path,[""]);
        $action = count($path) > 1 ? $path[count($path) - 1] : "index";
        $path = implode($path,"/");
        foreach ($this->_ROLNAME as $key => $value) {
           if(in_array($action, $value)){
                $action = $key;
                $this->_MODULE = \App\Models\Rules::_validateRULE($role,$firstPath,$action);
                break;
           }
        }
        if($this->_MODULE != null)
            return true;
        else
            return false;
    }
}
