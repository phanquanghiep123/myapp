<?php

namespace App\Http\Controllers\Core;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;
class FrontendController extends Controller
{
    public $_USER       = null;
    public $_URLFIX     = "frontend/";
    public $_ROUTE_FIX  = "frontend";
    public $_FOLDER_FIX = "frontend";
    public $_VIEWFOLDER = "frontend";
    public $_VIEWS      = [];
    public $_URL        = "frontend/";
    public $_DATA       = [];
    public $_HEADER     = "frontend/layouts/header";
    public $_FOOTER     = "frontend/layouts/footer";
    public $_MODULE     = null;
    public $_PAGINGNUMBER = 30;
    public $_ROLNAME    = [
        "add"      => ["add","create","save","update","store"],
        "delete"   => ["delete","remove","destroy"],
        "view"     => ["show","view","review","index"],
        "update"   => ["edit","update"]
    ];
    private $_COMMONROUTE = [
        "frontend.dashboard",
        "frontend.dashboard.notallow",
        "frontend.dashboard.notallowajax"
    ];
    private $_VIEWADD      = "/create";
    private $_VIEWEDIT     = "/edit";
    private $_VIEWLIST     = "/lists";
    private $_VIEWADDAJAX  = "/ajaxaddform";
    private $_VIEWEDITAJAX = "/ajaxeditform";
    public  $_MODEL    = null;
    public  $_TABLE    = null;
    private $_BACKURL  = null;
    public function __construct()
    {   $this->_DATA["_SEFF"]      = $this;
        $this->_DATA["_PAGETILE"]  = "Admin";
        $this->middleware(function ($request, $next) {
            $this->_USER = session('_USERFRONTEND');
            
            /*$AllowURL = $this->_validateRULE(@$this->_USER->role_id);
            if($AllowURL == false){
                if(\Request::ajax() == false){
                    return Redirect(route("frontend.dashboard.notallow"));  
                }else{
                    return Redirect(route("frontend.dashboard.notallowajax")); 
                }   
            }*/
            $this->_BACKURL   = $this->lookget_BACKURL();
            if(\Request::isMethod('get')){
                $this->add_BACKURL();  
            } 
            return $next($request);
        });
        
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
    public function _getMenu($slug){
        return \App\Models\Menus::join("menu_items","menus.id","=","menu_items.menu_id")->where('menus.slug','=',$slug);
    }
}
