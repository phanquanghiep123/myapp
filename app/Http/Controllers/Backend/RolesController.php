<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Core\BackendController;
class RolesController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->_ROLNAME["view"][]   = "rules";
        $this->_ROLNAME["update"][]   = "updaterules";
        parent::__construct();   
        $this->_TABLE = "roles";
        $this->_ROUTE = "roles";
        $this->_URL   = route($this->_ROUTE_FIX.".".$this->_ROUTE); 
        $this->_DATA["_PAGETILE"] = "Manage ".$this->_TABLE;
          
    }
    public function index()
    {   $table = [
            [
                "label" => "Name",
                "key"   => "name"
            ],
            [
                "label" => "Created at",
                "key"   => "created_at"
            ],
            [
                "label" => "Updated at",
                "key"   => "updated_at"
            ],
            [
                "label"   => "Status",
                "key"     => "status",
                'type'    => 'option',
                'options' => [
                    ['id' => 0 ,'name' => "no" ],
                    ['id' => 1 ,'name' => "yes" ]
                ],
                "option_key"     => "id",
                "option_value"   =>"name"
            ],
        ];

        $this->_DATA["_ROUTE"] = route($this->_ROUTE_FIX.".".$this->_ROUTE); 
        $this->_MODEL = \App\Models\Roles::paginate($this->_PAGINGNUMBER);
        $this->_DATA["_AFFTERACTION"] = " | <a href=\"".route($this->_ROUTE_FIX.".".$this->_ROUTE .".rules",["id" => "[ID]"])."\"> Rules</a>";
        return $this->_ListItem($table);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = [
            "name" => [
                "label" =>  "Name",
                "type"  => "text",
                "required" => true
            ],
            "status" => [
                "label"           => "Status",
                "type"            => "radio",
                "options"         => [["id" => 1 ,"name" => "yes"],["id" => 0 ,"name" => "no"]],
                "options_value"   => "id",
                "options_label"   => "name",
                "required"        => true,
                "value"           => 1
            ] 
        ];
        $this->_DATA["_ROUTE"] = route($this->_ROUTE_FIX.".".$this->_ROUTE.".store"); 
        $this->_DATA["_PAGETILE"] = $this->_DATA["_PAGETILE"] . ' - '.'Addnew';
        return $this->_CreateItem($form);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_MODEL = new \App\Models\Roles(); 
        return $this->_StoreItem($request); 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rules($id)
    {
        $this->_Data["_PAGETILE"] = "Update permissions of the system role";
        $Models = \App\Models\Rules::GetModulesAllow($id);
        if(count($Models->toArray()) != 0)
            $this->_DATA["_CONTENTTABLE"] = $this->get_html_modules($Models->toArray(),0,"",true);
        else 
            $this->_DATA["_CONTENTTABLE"] = "";
        $table = [
            [
                "label" => "Name",
                "key"   => "name"
            ],
            [
                "label" => "Path",
                "key"   => "Path"
            ],
            [
                "label" => "View",
                "key"   => "View"
            ],
            [
                "label" => "Add",
                "key"   => "Add"
            ],
            [
                "label" => "Update",
                "key"   => "Update"
            ],
            [
                "label" => "Delete",
                "key"   => "Delete"
            ],
        ];
        $this->_DATA["_TILECOLUMNTABLE"] = '<thead>
            <tr>
                <th>Name</th><th>Route</th><th>View</th><th>Add</th><th>Update</th><th>Delete</th>
            </tr>
        </thead>';
        $this->_DATA["_ADNEWCONTEN"] = "<a class=\"btn btn-secondary\" href=\"".$this->_DATA['_BACKURL']."\">BACK</a>"; 
        $this->_DATA["_ROUTE"]  = route($this->_ROUTE_FIX.".".$this->_ROUTE.".updaterules",['id' => $id]); 
        $this->_DATA["_BEFORETABLE"] = '<form method="post" action="'. $this->_DATA["_ROUTE"] .'"><input type="hidden" name="_token" value="'.csrf_token().'">';
        $this->_DATA["_AFFTERTABLE"] = '<div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions" style="margin-top:30px;">
                <div class="row">
                    <div class="col-12" style="text-align: right;">
                        <button type="submit" class="btn btn-success">
                            Update
                        </button>
                        <a href="'.@$this->_DATA["_BACKURL"].'" class="btn btn-secondary">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </form>';
        return $this->_ListItem($table);
    }
    public function updaterules(Request $request,$id){
        $modules  = $request->modules;
        $count    = count($modules);
        $allow    = $request->allow;
        $add      = $request->add;
        $update   = $request->update;
        $view     = $request->view;
        $delete   = $request->delete;
        \App\Models\Rules::where("role_id","=",$id)->update(["view" => 0]);
        if($count > 0){
            
            for($i = 0;$i <= $count ; $i++){
                if(@$modules[$i] != null){
                    $check = \App\Models\Rules::where(
                        [
                            ["module_id","=",$modules[$i]],
                            ["role_id","=",$id]
                        ]
                    )->first();
                    if($check == null){
                        $Rules = new  \App\Models\Rules();
                        $Rules->module_id = $modules[$i];
                        $Rules->add       = (@$add[$i]    == null) ? "0" : @$add[$i];
                        $Rules->update    = (@$update[$i] == null) ? "0" : @$update[$i];
                        $Rules->view      = (@$view[$i]   == null) ? "0" : @$view[$i];
                        $Rules->delete    = (@$delete[$i] == null) ? "0" : @$delete[$i];
                        $Rules->role_id   = $id;
                        $Rules->save();
                    }else{
                        \App\Models\Rules::where(
                            [
                                ["module_id","=",$modules[$i]],
                                ["role_id","=",$id]
                            ]
                        )->update(
                            [
                                "add"       => (@$add[$i]    == null) ? "0" : @$add[$i],
                                "update"    => (@$update[$i] == null) ? "0" : @$update[$i],
                                "view"      => (@$view[$i]   == null) ? "0" : @$view[$i],
                                "delete"    => (@$delete[$i] == null) ? "0" : @$delete[$i]
                            ]
                        );
                    }
                     
                }
            }
            
        }
        return redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = \App\Models\Roles::find($id);
        $form = [
            "name" => [
                "label" =>  "Name",
                "type"  => "text",
                "value" => $item->name,
                "required" => true
            ] ,
            "status" => [
                "label"           => "Status",
                "type"            => "radio",
                "options"         => [["id" => 1 ,"name" => "yes"],["id" => 0 ,"name" => "no"]],
                "options_value"   => "id",
                "options_label"   => "name",
                "required"        => true,
                "value"           => $item->status,
            ]
        ];
        $this->_DATA["_ROUTE"] = route($this->_ROUTE_FIX.".".$this->_ROUTE.".update",["id" => $id]); 
        $this->_DATA["_PAGETILE"] = $this->_DATA["_PAGETILE"] . ' - '.'Edit';
        return $this->_EditItem($form);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->_MODEL = \App\Models\Roles::find($id); 
        return $this->_StoreItem($request); 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->_MODEL = \App\Models\Roles::find($id); 
        return $this->_DestroyItem(); 
    }
    private $index = 1;
    private $html_modules = "";
    private function get_html_modules($data = null,$root = 0,$level = '', $table = true , $activer = -1){
          
        if ($data != null )
        {
            foreach ($data AS $key => $item_2 )
            {
                $active = '';
                $this->html_modules .= '<tr>'; 
                $this->html_modules .='<td>'.$level .'  '.$item_2['name'].'</td>';
                $this->html_modules .= '<td>'.$item_2['route'].'</td>';
                if ($item_2['view'] == '1')
                {
                    $active = 'checked';
                }else{
                    $active = '';
                }
                $this->html_modules .='<td>
                    <div class="checkbox"> 
                        <input id="item-'.$item_2["id"].'-view" type="checkbox" class="styled" '.$active.'><label for="item-'.$item_2["id"].'-view"></label>
                        <input value="'.$item_2['view'].'" type="hidden" class="apply" name="view[]"/>
                    </div>
                </td>';
                if ($item_2['add'] == '1')
                {
                    $active = 'checked';
                }else{
                    $active = '';
                }
                $this->html_modules .='<td>
                    <div class="checkbox"> 
                        <input id="item-'.$item_2["id"].'-add" type="checkbox" class="styled" '.$active.'><label for="item-'.$item_2["id"].'-add"></label>
                        <input value="'.$item_2['add'].'" type="hidden" class="apply" name="add[]"/>
                    </div>
                </td>';
                
                if ($item_2['update'] == '1')
                {
                    $active = 'checked';
                }else{
                    $active = '';
                }
                $this->html_modules .='<td>
                    <div class="checkbox"> 
                        <input id="item-'.$item_2["id"].'-edit" type="checkbox" class="styled" '.$active.'><label for="item-'.$item_2["id"].'-edit"></label>
                        <input value="'.$item_2['update'].'" type="hidden" class="apply" name="update[]"/>
                    </div>
                </td>';
                if ($item_2['delete'] == '1')
                {
                    $active = 'checked';
                }else{
                    $active = '';
                }
                $this->html_modules .='<td>
                    <div class="checkbox"> 
                        <input id="item-'.$item_2["id"].'-delete" type="checkbox" class="styled" '.$active.'><label for="item-'.$item_2["id"].'-delete"></label>
                        <input value="'.$item_2['delete'].'" type="hidden" class="apply" value="'.$item_2['delete'].'" name="delete[]"/>
                    </div>
                    <input type="hidden" name="modules[]" value="'.$item_2["id"].'">
                </td>';
            }
        }
        return $this->html_modules;
    }
}
