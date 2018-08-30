<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Core\BackendController;
use Validator;
use Redirect;
class UsersController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        parent::__construct();   
        $this->_TABLE = "users";
        $this->_ROUTE = "users";
        $this->_URL   = route($this->_ROUTE_FIX.".".$this->_ROUTE); 
        $this->_DATA["_PAGETILE"] = "Manage ".$this->_TABLE;        
    }
    public function index()
    {  
        $table = [
            [
                "label" => "First name",
                "key"   => "first_name"
            ],
            [
                "label" => "Last name",
                "key"   => "first_name"
            ],
            [
                "label" => "User ID",
                "key"   => "user_id"
            ],
            [
                "label" => "Email",
                "key"   => "email"
            ],
            
            [
                "label" => "Contact number",
                "key"   => "contact_number"
            ],
            [
                "label"   => "User type",
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
        $this->_MODEL = \App\Models\Users::paginate($this->_PAGINGNUMBER);
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
            "first_name" => [
                "label" =>  "First name",
                "type"  => "text",
                "value" => old("first_name"),
                "required" => true

            ],
            "last_name" => [
                "label" =>  "Last name",
                "type"  => "text",
                "value" => old("last_name"),
                "required" => true
            ],
            "user_id" => [
                "label" =>  "User ID",
                "type"  => "text",
                "value" => old("user_id"),
                "required" => true,
                "validate" => "required|unique:$this->_TABLE,user_id"
            ],
            "email" => [
                "label"    => "Email",
                "type"     => "text",
                "value"    => old("email"),
                "required" => true,
                "validate" => "required|email|unique:$this->_TABLE,email"
            ],
            "password" => [
                "label" => "Password",
                "type"  => "password",
                "value" => old("password"),
                "required" => true
            ],
            "is_sys" => [
                "label"           => "User type",
                "type"            => "radio",
                "options"         => [["id" => 1 ,"name" => "Backend user"],["id" => 0 ,"name" => "Frontend user"]],
                "options_value"   => "id",
                "options_label"   => "name",
                "required"        => true,
                "value"           => 0
            ],
            "contact_number" => [
                "label" => "Contact number",
                "value" => old("contact_number"),
                "type" => "text"
            ],
            "photo" => [
                "label" => "Avatar",
                "type" => "file",
                "attr" => [
                    "accept" => "image/*"
                ]
            ],
            "work_id" => [
                "label"           => "Work name",
                "value"           => old("work_id"),
                "type"            => "select",
                "options"         => \App\Models\Works::get()->toArray(),
                "options_value"   => "id",
                "options_label"   => "name",
                "required"        => true
            ],
            "prison_id" => [
                "label"           => "Prison name",
                "type"            => "select",
                "value"           => old("prison_id"),
                "options"         => \App\Models\Prisons::get()->toArray(),
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true
            ],
            "role_id" => [
                "label"           => "Role name",
                "value"           => old("role_id"),
                "type"            => "select",
                "options"         => \App\Models\Roles::get()->toArray(),
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true
            ],
            "staff_id" => [
                "label"           => "Staff name",
                "value"           => old("staff_id"),
                "type"            => "select",
                "options"         => \App\Models\Staffs::get()->toArray(),
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true
            ],
            "status" => [
                "label"           => "Status",
                "type"            => "radio",
                "value"           => old("status"),
                "options"         => [["id" => 1 ,"name" => "yes"],["id" => 0 ,"name" => "no"]],
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true,
                "value"           => 1
            ]
        ];
        $this->_DATA["_ROUTE"] = route($this->_ROUTE_FIX.".".$this->_ROUTE.".store");
        $this->_DATA["_PAGETILE"] =  $this->_DATA["_PAGETILE"] . ' - ' . 'Addnew'; 
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
        $this->_MODEL = new \App\Models\Users(); 
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
        $item = \App\Models\Users::find($id);
        $form = [
            "first_name" => [
                "label" =>  "First name",
                "type"  => "text",
                "value" => $item->first_name,
                "required" => true

            ],
            "last_name" => [
                "label" =>  "Last name",
                "type"  => "text",
                "value" => $item->last_name,
                "required" => true
            ],
            "user_id" => [
                "label" => "Users ID",
                "type" => "text",
                "value" => $item->user_id,
                "required" => true,
                "validate" => "unique:$this->_TABLE,user_id,$item->id,id"
            ],
            "email" => [
                "label" => "Email",
                "type" => "text",
                "value" => $item->email,
                "required" => true,
                "validate" => "unique:$this->_TABLE,email,$item->id,id"
            ],
            "password" => [
                "label" => "Password",
                "type"  => "password",
                "value" => "",
            ],
            "is_sys" => [
                "label"           => "User type",
                "type"            => "radio",
                "options"         => [["id" => 1 ,"name" => "Backend user"],["id" => 0 ,"name" => "Frontend user"]],
                "options_value"   => "id",
                "options_label"   => "name",
                "required"        => true,
                "value"           => $item->is_sys,
            ],
            "contact_number" => [
                "label" => "Contact number",
                "value" => $item->contact_number,
                "type" => "text"
            ],
            "photo" => [
                "label"   => "Photo",
                "type"    => "file",
                "value"   => asset($item->photo),
                "attr"    => [
                    "accept" => "image/*"
                ]
            ],
            "work_id" => [
                "label"           => "Work name",
                "value"           => $item->work_id,
                "type"            => "select",
                "options"         => \App\Models\Works::get()->toArray(),
                "options_value"   => "id",
                "options_label"   => "name",
                "required"        => true
            ],
            "prison_id" => [
                "label"           => "Prison name",
                "type"            => "select",
                "value"           => $item->prison_id,
                "options"         => \App\Models\Prisons::get()->toArray(),
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true
            ],
            "role_id" => [
                "label"           => "Role name",
                "value"           => $item->role_id,
                "type"            => "select",
                "options"         => \App\Models\Roles::get()->toArray(),
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true
            ],
            "staff_id" => [
                "label"           => "Staff name",
                "value"           => $item->role_id,
                "type"            => "select",
                "options"         => \App\Models\Staffs::get()->toArray(),
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true
            ],
            "status" => [
                "label"           => "Status",
                "type"            => "radio",
                "value"           => $item->status,
                "options"         => [["id" => 1 ,"name" => "yes"],["id" => 0 ,"name" => "no"]],
                "options_value"   => "id",
                "options_label"   => "name",
                "required"        => true
            ]
        ];

        $this->_DATA["_ROUTE"] = route($this->_ROUTE_FIX.".".$this->_ROUTE.".update",["id" => $id]); 
        $this->_DATA["_PAGETILE"] =  $this->_DATA["_PAGETILE"] . ' - ' . 'Edit';
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
        $this->_MODEL = \App\Models\Users::find($id); 
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
        $this->_MODEL = \App\Models\Works::find($id); 
        return $this->_DestroyItem();
    }
}
