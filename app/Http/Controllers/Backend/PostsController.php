<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Core\BackendController;
class PostsController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        parent::__construct();   
        $this->_TABLE = "posts";
        $this->_ROUTE = "posts";
        $this->_URL   = route($this->_ROUTE_FIX.".".$this->_ROUTE);  
        $this->_DATA["_PAGETILE"] = "Manage ".$this->_TABLE;
          
    }
    public function index()
    {   $table = [
            [
                "label" => "Name",
                "key"   => "name",

            ],
            [
                "label" => 'Thumb',
                "key"   => 'thumb',
                'type'  => 'image'
            ],
            [
                "label" => 'Link',
                "key"   => 'link',
                'type'  => 'link'
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
        $this->_MODEL = \App\Models\Posts::orderby("id","ASC")->paginate($this->_PAGINGNUMBER);
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
            "content" => [
                "label" =>  "Content",
                "type"  => "editor",
                "required" => false,
            ] ,
            "description" => [
                "label" =>  "Description",
                "type"  => "editor",
                "required" => false,
                "arrt" => [
                    "data-max-lenght" => 500
                ]
            ] ,
            "thumb" => [
                "label" => "Thumb",
                "type" => "file",
                "attr" => [
                    "accept" => "image/*"
                ]
            ],
            "status" => [
                "label"           => "Status",
                "type"            => "radio",
                "options"         => [["id" => 1 ,"name" => "yes"],["id" => 0 ,"name" => "no"]],
                "options_value"   => "id",
                "options_label"   => "name",
                "required"        => true,
                "value"           => 1
            ],
            "user_id" => [
                "label"           =>  "Menu parent",
                "type"            => "hidden",             
                "required"        => true,
                "value"           => $this->_USER->id
            ], 

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
        if(trim(@$request->path) == "#")
        {
            $form = session("_FROM");
            unset($form["path"]["validate"]);
            session(["_FROM" => $form]);
        }
        $this->_MODEL = new \App\Models\Posts(); 
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
        $item = \App\Models\Posts::find($id);
        $form = [
            "name" => [
                "label"    =>  "Name",
                "type"     => "text",
                "required" => true,
                "value"    => $item->name
            ] ,    
            "content" => [
                "label" =>  "Content",
                "type"  => "editor",
                "required" => false,
                "value"    => $item->content
            ] ,
            "description" => [
                "label" =>  "Description",
                "type"  => "editor",
                "required" => false,
                "arrt" => [
                    "data-max-lenght" => 500
                ],
                "value" => $item->description
            ] ,
            "thumb" => [
                "label" => "Thumb",
                "type" => "file",
                "attr" => [
                    "accept" => "image/*"
                ],
                "value" => \Storage::url($item->thumb)
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
        if(trim($request->path) == "#")
        {
            $form = session("_FROM");
            unset($form["path"]["validate"]);
            session(["_FROM" => $form]);
        }
        $this->_MODEL = \App\Models\Posts::find($id); 
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
        $this->_MODEL = \App\Models\Posts::find($id); 
        return $this->_DestroyItem();
    }
}
