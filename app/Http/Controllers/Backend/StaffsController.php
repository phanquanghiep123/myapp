<?php 
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Core\BackendController;
class StaffsController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        parent::__construct();   
        $this->_TABLE = "staffs";
        $this->_ROUTE = "staffs";
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
        $this->_MODEL = \App\Models\staffs::paginate($this->_PAGINGNUMBER);
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
            ] ,
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
        $this->_MODEL = new \App\Models\staffs(); 
        $this->_StoreItem($request);
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
        $item = \App\Models\staffs::find($id);
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
        $this->_MODEL = \App\Models\staffs::find($id); 
        return  $this->_StoreItem($request);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->_MODEL = \App\Models\staffs::find($id); 
        return $this->_DestroyItem();
    }
}
