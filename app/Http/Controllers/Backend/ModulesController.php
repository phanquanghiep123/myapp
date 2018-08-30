<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Core\BackendController;
class ModulesController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->_ROLNAME["update"][] = "updatesort";
        parent::__construct();   
        $this->_TABLE = "modules";
        $this->_ROUTE = "modules";
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
                "label"   => "Modules type",
                "key"     => "is_sys",
                'type'    => 'option',
                'options' => [
                    ['id' => 0 ,'name' => "Frontend module" ],
                    ['id' => 1 ,'name' => "Backend module" ]
                ],
                "option_key"     => "id",
                "option_value"   =>"name"
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
        $this->_MODEL = \App\Models\Modules::orderby("id","ASC")->paginate($this->_PAGINGNUMBER);
        return $this->_ListItem($table);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updatesort(Request $request){
        $od = $request->order;
        $md = $request->idModel;
        if(@$md && $md){
            foreach ($md as $key => $value) {
                $model = \App\Models\Modules::find($value);
                if($model){
                    $model->sort = @$od[$key];
                    $model->save();
                }
            }
        }
        return redirect($this->_URL);
    }
    public function create()
    {
        $form = [
            "name" => [
                "label" =>  "Name",
                "type"  => "text",
                "required" => true
            ] ,    
            "route" => [
                "label" =>  "Route",
                "type"  => "text",
                "required" => false,
                "validate" => "unique:$this->_TABLE,route"
            ] ,
            "is_sys" => [
                "label"           => "Modules type",
                "type"            => "radio",
                "options"         => [["id" => 1 ,"name" => "Backend module"],["id" => 0 ,"name" => "Frontend module"]],
                "options_value"   => "id",
                "options_label"   => "name",
                "required"        => true,
                "value"           => 1
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
        $this->_DATA["_PAGETILE"] = $this->_DATA["_PAGETILE"] ." - Addnew"; 
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

        $form = session("_FROM");
        $check = \App\Models\Modules::where([["route","=",$request->route],["is_sys","=",$request->is_sys]])->first();
        if($check == null){
            $form["route"]["validate"] = null;
            session(["_FROM" => $form]);
        }
        $this->_MODEL = new \App\Models\Modules(); 
        return $this->_StoreItem($request); 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$this->_DetailItem();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = \App\Models\Modules::find($id);
        $form = [
            "name" => [
                "label" =>  "Name",
                "type"  => "text",
                "required" => true,
                "value" => $item->name,
            ] ,
            "route" => [
                "label" =>  "Route",
                "type"  => "text",
                "required" => false,
                "value" => $item->route,
                "validate" => "unique:$this->_TABLE,route,$item->id,id"
            ],
            "is_sys" => [
                "label"           => "Modules type",
                "type"            => "radio",
                "options"         => [["id" => 1 ,"name" => "Backend module"],["id" => 0 ,"name" => "Frontend module"]],
                "options_value"   => "id",
                "options_label"   => "name",
                "required"        => true,
                "value"           => $item->is_sys
            ],
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
        $this->_DATA["_PAGETILE"] = $this->_DATA["_PAGETILE"] ." - Edit"; 
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
        $form = session("_FROM");
        $check = \App\Models\Modules::where([["id","!=",$id],["route","=",$request->route],["is_sys","=",$request->is_sys]])->first();
        if($check == null){
            $form["route"]["validate"] = null;
            session(["_FROM" => $form]);
        }
        $this->_MODEL = \App\Models\Modules::find($id); 
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
        $this->_MODEL = \App\Models\Modules::find($id); 
        return $this->_DestroyItem();
    }
}
