<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Core\BackendController;
class PrisonsController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        parent::__construct();   
        $this->_TABLE = "prisons";
        $this->_ROUTE = "prisons";
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
                "label" => "Longitude",
                "key"   => "longitude"
            ],
            [
                "label" => "Latitude",
                "key"   => "latitude"
            ],
            [
                "label" => "Prison code",
                "key"   => "prison_code"
            ],
            [
                "label" => "Street",
                "key"   => "street"
            ],
            [
                "label" => "City",
                "key"   => "city"
            ],
            [
                "label" => "Town",
                "key"   => "town"
            ],
            [
                "label" => "County",
                "key"   => "county"
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
        $this->_MODEL = \App\Models\Prisons::paginate($this->_PAGINGNUMBER);
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
            "longitude" => [
                "label" =>  "Longitude",
                "type"  => "text",
            ], 
            "latitude" => [
                "label" =>  "Latitude",
                "type"  => "text",
            ],
            "prison_code" => [
                "label" =>  "Prison code",
                "type"  => "text",
            ],
            "street" => [
                "label" =>  "Street",
                "type"  => "text",
            ],
            "city" => [
                "label" =>  "City",
                "type"  => "text",
            ],
            "town" => [
                "label" =>  "Town",
                "type"  => "text",
            ],
            "county" => [
                "label" =>  "County",
                "type"  => "text",
            ],
            "postcode" => [
                "label" =>  "Postcode",
                "type"  => "text",
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
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_MODEL = new \App\Models\Prisons(); 
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
        $item = \App\Models\Prisons::find($id);
        $form = [
            "name" => [
                "label" =>  "Name",
                "type"  => "text",
                "value" => $item->name,
                "required" => true
            ],
            "longitude" => [
                "label" =>  "Longitude",
                "value" => $item->longitude,
                "type"  => "text",
            ], 
            "latitude" => [
                "label" =>  "Latitude",
                "value" => $item->latitude,
                "type"  => "text",
            ],
            "prison_code" => [
                "label" =>  "Prison code",
                "value" => $item->prison_code,
                "type"  => "text",
            ],
            "street" => [
                "label" =>  "Street",
                "value" => $item->street,
                "type"  => "text",
            ],
            "city" => [
                "label" =>  "City",
                "value" => $item->city,
                "type"  => "text",
            ],
            "town" => [
                "label" =>  "Town",
                "value" => $item->town,
                "type"  => "text",
            ],
            "county" => [
                "label" =>  "County",
                "value" => $item->county,
                "type"  => "text",
            ],
            "postcode" => [
                "label" =>  "Postcode",
                "value" => $item->postcode,
                "type"  => "text",
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
        $this->_DATA["_PAGETILE"] = $this->_DATA["_PAGETILE"] . ' - '.'Edit';
        $this->_DATA["_ROUTE"] = route($this->_ROUTE_FIX.".".$this->_ROUTE.".update",["id" => $id]); 
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
        $this->_MODEL = \App\Models\Prisons::find($id); 
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
        $this->_MODEL = \App\Models\Prisons::find($id); 
        return $this->_DestroyItem();
    }
}
