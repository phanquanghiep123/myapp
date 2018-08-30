<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Core\BackendController;
class DutiesController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    { 
        $this->_ROLNAME["view"][]   = "types";
        $this->_ROLNAME["add"][]    = "addtypes";
        $this->_ROLNAME["add"][]    = "storetypes";
        $this->_ROLNAME["update"][] = "edittypes";
        $this->_ROLNAME["update"][] = "updatetypes";
        $this->_ROLNAME["delete"][] = "destroytypes";
        parent::__construct();   
        $this->_TABLE = "duties";
        $this->_ROUTE = "duties";
        $this->_URL   = route($this->_ROUTE_FIX.".".$this->_ROUTE); 
        $this->_DATA["_PAGETILE"] = "Manage ".$this->_TABLE;   
          
    }
    public function index()
    {   $table = [
            [
                "label" => "Duty code",
                "key"   => "duty_code"
            ],
            [
                "label" => "Start time",
                "key"   => "start_time"
            ],
            [
                "label" => "End time",
                "key"   => "end_time"
            ],
            [
                "label" => "Vacancies",
                "key"   => "vacancies"
            ],
            [
                "label"   => "Prison",
                "key"     => "prison_id",
                'type'    => 'option',
                'options' => \App\Models\Prisons::get()->toArray(),
                'key'     => "id",
                "value"   =>"name"
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
        $this->_MODEL = \App\Models\Duties::paginate($this->_PAGINGNUMBER);
        return $this->_ListItem($table);
    }
    public function types()
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
        $this->_DATA["_ADNEWCONTEN"] = "<a class=\"btn m-btn--square btn-success\" href=\"". route($this->_ROUTE_FIX.".".$this->_ROUTE.".addtypes") ."\">Add new</a>"; 
        $this->_DATA["_ROUTE"] = route($this->_ROUTE_FIX.".".$this->_ROUTE); 
        $this->_DATA["_CENTERACTION"] = '<a href="'.route($this->_ROUTE_FIX.".".$this->_ROUTE.".edittypes",["id" => "[ID]"]).'" style="margin-right:5px;">Edit</a>
        <a id="delete-action" title="Xóa" href="javascript:;" data-href="'.route($this->_ROUTE_FIX.".".$this->_ROUTE.".destroytypes",["id" => "[ID]"]).'" onclick="return confirm(\'Do you want to delete this item?\');"> Delete</a>';
        $this->_MODEL = \App\Models\Duty_type::get()->toArray();
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
            "duty_code" => [
                "label" =>  "Duty code",
                "type"  => "text",
            ], 
            "date" => [
                "label" =>  "Date",
                "type"  => "date",
            ],
            "start_time" => [
                "label" =>  "Start time",
                "type"  => "datetime",
            ],
            "end_time" => [
                "label" =>  "End time",
                "type"  => "datetime",
            ],
            "vacancies" => [
                "label" =>  "Vacancies",
                "type"  => "text",
            ],
            "prison_id" => [
                "label"           => "Prison",
                "type"            => "radio",
                "options"         => \App\Models\Prisons::get()->toArray(),
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true,
            ],
            "duty_type_id" => [
                "label"           => "Duty type",
                "type"            => "radio",
                "options"         => \App\Models\Duty_type::get()->toArray(),
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true,
            ],
            "location_name" => [
                "label" =>  "Location name",
                "type"  => "text",
                "required" => false
            ],
            "location_street" => [
                "label" =>  "Location street",
                "type"  => "text",
                "required" => false
            ],
            "location_city" => [
                "label" =>  "Location city",
                "type"  => "text",
                "required" => false
            ],
            "location_town" => [
                "label" =>  "Location town",
                "type"  => "text",
                "required" => false
            ],
            "location_postcode" => [
                "label" =>  "Location postcode",
                "type"  => "text",
                "required" => false
            ],
            "prisoner_name" => [
                "label" =>  "Prisoner name",
                "type"  => "text",
                "required" => false
            ],
            "extra_info" => [
                "label" =>  "Extra info",
                "type"  => "texarea",
                "required" => false
            ],
            "notes" => [
                "label" =>  "Notes",
                "type"  => "texarea",
                "required" => false
            ],
            "status" => [
                "label"           => "Status",
                "type"            => "radio",
                "options"         => [["id" => 1 ,"name" => "yes"],["id" => 0 ,"name" => "no"]],
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true,
                "value"           => 1
            ]
        ];
        $this->_DATA["_PAGETILE"] = $this->_DATA["_PAGETILE"] . ' - '.'Addnew';
        $this->_DATA["_ROUTE"] = route($this->_ROUTE_FIX.".".$this->_ROUTE.".store"); 
        return $this->_CreateItem($form);
    }
    public function addtypes (){
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
                "options_label"  => "name",
                "required"        => true,
                "value"           => 1
            ]
        ];
        $this->_DATA["_PAGETILE"]    = $this->_DATA["_PAGETILE"] . ' - '.'Addnew duty types';
        $this->_DATA["_ROUTE"]       =  route($this->_ROUTE_FIX.".".$this->_ROUTE.".storetypes"); 
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
        $this->_MODEL = new \App\Models\Duties(); 
        return $this->_StoreItem($request);
        
    }
     public function storetypes(Request $request)
    {
        $this->_DATA["_CTS_redirect"] = route($this->_ROUTE_FIX.".".$this->_ROUTE.".edittypes",["id" ,"{id}"]); 
        $this->_MODEL = new \App\Models\Duty_type(); 
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
        $item = \App\Models\Duties::find($id);
        $form = [
            "duty_code" => [
                "label" =>  "Duty code",
                "type"  => "text",
                "value" => $item->duty_code
            ], 
            "date" => [
                "label" =>  "Date",
                "type"  => "date",
                "value" => $item->date
            ],
            "start_time" => [
                "label" =>  "Start time",
                "type"  => "datetime",
                "value" => $item->start_time
            ],
            "end_time" => [
                "label" =>  "End time",
                "type"  => "datetime",
                "value" => $item->end_time
            ],
            "vacancies" => [
                "label" =>  "Vacancies",
                "type"  => "text",
                "value" => $item->vacancies
            ],
            "prison_id" => [
                "label"           => "Prison",
                "type"            => "radio",
                "options"         => \App\Models\Prisons::get()->toArray(),
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true,
                "value" => $item->prison_id
            ],
            "duty_type_id" => [
                "label"           => "Duty type",
                "type"            => "radio",
                "options"         => \App\Models\Duty_type::get()->toArray(),
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true,
                "value" => $item->duty_type_id
            ],
            "location_name" => [
                "label" =>  "Location name",
                "type"  => "text",
                "required" => false,
                "value" => $item->location_name
            ],
            "location_street" => [
                "label" =>  "Location street",
                "type"  => "text",
                "required" => false,
                "value" => $item->location_street
            ],
            "location_city" => [
                "label" =>  "Location city",
                "type"  => "text",
                "required" => false,
                "value" => $item->location_city
            ],
            "location_town" => [
                "label" =>  "Location town",
                "type"  => "text",
                "required" => false,
                "value" => $item->location_town
            ],
            "location_postcode" => [
                "label" =>  "Location postcode",
                "type"  => "text",
                "required" => false,
                "value" => $item->location_postcode
            ],
            "prisoner_name" => [
                "label" =>  "Prisoner name",
                "type"  => "text",
                "required" => false,
                "value" => $item->prisoner_name
            ],
            "extra_info" => [
                "label" =>  "Extra info",
                "type"  => "texarea",
                "required" => false,
                "value" => $item->extra_info
            ],
            "notes" => [
                "label" =>  "Notes",
                "type"  => "texarea",
                "required" => false,
                "value" => $item->notes
            ],
            "status" => [
                "label"           => "Status",
                "type"            => "radio",
                "options"         => [["id" => 1 ,"name" => "yes"],["id" => 0 ,"name" => "no"]],
                "options_value"   => "id",
                "options_label"   => "name",
                "required"        => true,
                "value"           => $item->status
            ]
        ];
        $this->_DATA["_PAGETILE"] = $this->_DATA["_PAGETILE"] . ' - '.'Edit';
        $this->_DATA["_ROUTE"] = route($this->_ROUTE_FIX.".".$this->_ROUTE.".update",["id" => $id]); 
        return $this->_EditItem($form);
    }
    public function edittypes ($id){
        $item = \App\Models\Duty_type::find($id);
        $form = [
            "name" => [
                "label" =>  "Name",
                "type"  => "text",
                "required" => true,
                "value"    => $item->name
            ],
            "status" => [
                "label"           => "Status",
                "type"            => "radio",
                "options"         => [["id" => 1 ,"name" => "yes"],["id" => 0 ,"name" => "no"]],
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true,
                "value"           => $item->status
            ]
        ];
        $this->_DATA["_PAGETILE"]    = $this->_DATA["_PAGETILE"] . ' - '.'Addnew duty types';
        $this->_DATA["_ROUTE"]       =  route($this->_ROUTE_FIX.".".$this->_ROUTE.".updatetypes",["id" => $id]); 
        return $this->_CreateItem($form);
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
        $this->_MODEL = \App\Models\Duties::find($id); 
        return $this->_StoreItem($request);
    }
    public function updatetypes(Request $request, $id)
    {
        $this->_DATA["_CTS_redirect"] = route($this->_ROUTE_FIX.".".$this->_ROUTE.".edittypes",["id" => $id]);  
        $this->_MODEL = \App\Models\Duty_type::find($id); 
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
        $this->_MODEL = \App\Models\Duties::find($id); 
        return $this->_DestroyItem();
    }
}
