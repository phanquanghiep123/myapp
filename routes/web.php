<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


$DB_DATABASE = env("DB_DATABASE"); 
$DB_USERNAME = env("DB_USERNAME"); 
//-----------------------------------backend route-----------------------------------.
//login dashboard

$groupFolder = "Backend";
$fixname = "backend";
Route::group(['prefix' => $fixname],function(){
    $groupFolder = "Backend";
    $fixname = "backend";
    $acountsRoutes = [
        [
            // login get
            "url"        => "/login",
            "controller" => $groupFolder."\AccountsController@getlogin",
            "name"       => $fixname.".getlogin",
            "type"       => "get" 
        ],
        [
            // login post
            "url"        => "/login",
            "controller" =>  $groupFolder."\AccountsController@postlogin",
            "name"       => $fixname.".postlogin",
            "type"       => "post"
        ]
        
    ];
    foreach ($acountsRoutes as $key => $value) {
        Route::{$value["type"]}($value["url"],$value["controller"])->name($value["name"]);
    }
});
Route::group(['middleware' => $groupFolder ,'prefix' => $fixname],function() use($DB_DATABASE,$DB_USERNAME){
    $groupFolder = "Backend";
    $fixname = "backend";
    $modules = null;
    $backendRoutes = [
        /*-------------------------------Dashboard--------------------------*/
        [
            // Dashboard
            "url"       => "/",
            "controller" => $groupFolder."\DashboardController@index",
            "name"      => $fixname.".dashboard",
            "type"      => "get"
        ],
        [
            // Dashboard
            "url"       => "/notallow",
            "controller" => $groupFolder."\DashboardController@notallow",
            "name"      => $fixname.".dashboard.notallow",
            "type"      => "get"
        ],
        [
            // Dashboard
            "url"       => "/notallowajax",
            "controller" => $groupFolder."\DashboardController@notallowajax",
            "name"      => $fixname.".dashboard.notallowajax",
            "type"      => "get"
        ],

        [
            // login post
            "url"       => "/logout",
            "controller" => $groupFolder."\DashboardController@getlogout",
            "name"      => $fixname.".dashboard.logout",
            "type"      => "get"
        ],
        /*-------------------------------!Dashboard--------------------------*/

        /*-------------------------------duties--------------------------*/
        [
            // duties types
            "url"       => "/duties/types",
            "controller" => $groupFolder."\DutiesController@types",
            "name"      => $fixname.".duties.types",
            "type"      => "get"
        ],
        
        [
            // duties add types
            "url"       => "/duties/addtypes",
            "controller" => $groupFolder."\DutiesController@addtypes",
            "name"      => $fixname.".duties.addtypes",
            "type"      => "get"
        ],
        [
            // duties types
            "url"       => "/duties/storetypes",
            "controller" => $groupFolder."\DutiesController@storetypes",
            "name"      => $fixname.".duties.storetypes",
            "type"      => "post"
        ],
        [
            // duties types
            "url"       => "/duties/edittypes/{id}",
            "controller" =>  $groupFolder."\DutiesController@edittypes",
            "name"      =>  $fixname.".duties.edittypes",
            "type"      => "get"
        ],
        [
            // duties types
            "url"       => "/duties/destroytypes/{id}",
            "controller" => $groupFolder."\DutiesController@edittypes",
            "name"      => $fixname.".duties.destroytypes",
            "type"      => "get"
        ],
        [
            // duties types
            "url"       => "/duties/updatetypes/{id}",
            "controller" => $groupFolder."\DutiesController@updatetypes",
            "name"      => $fixname.".duties.updatetypes",
            "type"      => "post"
        ],
        /*-------------------------------!duties--------------------------*/
        /*-------------------------------menus--------------------------*/
        
        [
            // menus additem
            "url"       => "/menus/additem/{id}",
            "controller" => $groupFolder."\MenusController@additem",
            "name"      => $fixname.".menus.additem",
            "type"      => "get"
        ],
        [
            // menus edititem
            "url"       => "/menus/edititem/{id}",
            "controller" => $groupFolder."\MenusController@edititem",
            "name"      => $fixname.".menus.edititem",
            "type"      => "get"
        ],
        [
            // menus updateitem
            "url"       => "/menus/updateitem/{id}",
            "controller" => $groupFolder."\MenusController@updateitem",
            "name"      => $fixname.".menus.updateitem",
            "type"      => "post"
        ],
        
        [
            // menus destroy
            "url"       => "/menus/destroyitem/{id}",
            "controller" =>  $groupFolder."\MenusController@destroyitem",
            "name"      => $fixname.".menus.destroyitem",
            "type"      => "get"
        ],
        [
            // menus destroy
            "url"       => "/menus/storeitem/{id}",
            "controller" => $groupFolder."\MenusController@storeitem",
            "name"      => $fixname.".menus.storeitem",
            "type"      => "post"
        ],
        [
            // menus destroy
            "url"       => "/menus/viewtree/{id}",
            "controller" => $groupFolder."\MenusController@viewtree",
            "name"      => $fixname.".menus.viewtree",
            "type"      => "get"
        ],
        [
            // menus updatesort
            "url"       => "/menus/updatesort/{id}",
            "controller" => $groupFolder."\MenusController@updatesort",
            "name"      => $fixname.".menus.updatesort",
            "type"      => "post"
        ],
        /*-------------------------------!menus--------------------------*/

        /*-------------------------------roles--------------------------*/
        [
            // roles rules
            "url"       => "/roles/rules/{id}",
            "controller" => $groupFolder."\RolesController@rules",
            "name"      => $fixname.".roles.rules",
            "type"      => "get"
        ],
        [
            // roles rules
            "url"       => "/roles/updaterules/{id}",
            "controller" => $groupFolder."\RolesController@updaterules",
            "name"      => $fixname.".roles.updaterules",
            "type"      => "post"
        ],
        /*-------------------------------!modules--------------------------*/
        [
            // modules updatesort
            "url"       => "/modules/updatesort",
            "controller" =>  $groupFolder."\ModulesController@updatesort",
            "name"      => $fixname.".modules.updatesort",
            "type"      => "post"
        ], 
        /*-------------------------------!modules--------------------------*/
    ];
    if($DB_DATABASE && $DB_USERNAME){
        $routes = [
            [
                "url"    => "",
                "type"   => "get",
                "action" => "index",
                "name"   => ""
            ],
            [
                "url"    => "create",
                "type"   => "get",
                "action" => "create",
                "name"   => ".create"
            ],
            [
                "url"    => "store",
                "type"   => "post",
                "action" => "store",
                "name"   => ".store"
            ],
            [
                "url"    => "edit/{id}",
                "type"   => "get",
                "action" => "edit",
                "name"   => ".edit"
            ],
            [
                "url"    => "update/{id}",
                "type"   => "post",
                "action" => "update",
                "name"   => ".update"
            ],
            [
                "url"    => "destroy/{id}",
                "type"   => "get",
                "action" => "destroy",
                "name"   => ".destroy"
            ]
        ];
        try {
            $modules = \DB::table("modules")->where([["status","=",1],["is_sys" ,"=" ,1]])->get();
            if($modules){
                 foreach ($modules as $key => $value) {
                    $urllist        = $value->route;
                    $strController  = strtoupper( substr( $urllist, 0, 1 ) ).substr( $urllist, 1 );
                    $strController  = $strController."Controller";
                    foreach ($routes as $key_route => $value_route) {
                        $controller      = $groupFolder.'\\'.$strController."@".$value_route['action'];
                        $backendRoutes [] = [
                            "url"       => $urllist  ."/". $value_route["url"],
                            "controller" => $controller,
                            "name"      => $fixname."." .$urllist . $value_route["name"],
                            "type"      => $value_route["type"]
                        ];
                    }     
                }
            }
        } catch (Exception $e) {
            
        }
        
    }
    foreach ($backendRoutes as $key => $value) {
        Route::{$value["type"]}($value["url"],$value["controller"])->name($value["name"]);
    }
});
//!----------------------------------backend route-----------------------------------.

//-----------------------------------frontend route----------------------------------------------------------.
$groupFolder = "Frontend";
$fixname = "frontend";
$frontendRoutes = [
    [
        // login get
        "url"       => "/login",
        "controller" => $groupFolder."\AccountsController@getlogin",
        "name"      => $fixname.".getlogin",
        "type"      => "get" 
    ],
    [
        // login post
        "url"       => "/login",
        "controller" => $groupFolder."\AccountsController@postlogin",
        "name"      => $fixname.".postlogin",
        "type"      => "post"
    ],
    [
        // login get
        "url"       => "/logout",
        "controller" => $groupFolder."\AccountsController@logout",
        "name"      => $fixname.".logout",
        "type"      => "get" 
    ],
    [
        // login get
        "url"       => "/",
        "controller" => $groupFolder."\HomeController@index",
        "name"      => $fixname.".home",
        "type"      => "get" 
    ]
];
foreach ($frontendRoutes as $key => $value) {
    Route::{$value["type"]}($value["url"],$value["controller"])->name($value["name"]);
}
Route::group(['middleware' => $groupFolder ],function() use($DB_DATABASE,$DB_USERNAME){
    $frontendRoutes = [];
    $groupFolder    = "Frontend";
    $fixname        = "frontend";
    $modules        = null;
    $routes = [
        [
            "url"    => "",
            "type"   => "get",
            "action" => "index",
            "name"   => ""
        ],
        [
            "url"    => "create",
            "type"   => "get",
            "action" => "create",
            "name"   => ".create"
        ],
        [
            "url"    => "store",
            "type"   => "post",
            "action" => "store",
            "name"   => ".store"
        ],
        [
            "url"    => "edit/{id}",
            "type"   => "get",
            "action" => "edit",
            "name"   => ".edit"
        ],
        [
            "url"    => "update/{id}",
            "type"   => "post",
            "action" => "update",
            "name"   => ".update"
        ],
        [
            "url"    => "destroy/{id}",
            "type"   => "get",
            "action" => "destroy",
            "name"   => ".destroy"
        ]
    ];
    if($DB_DATABASE && $DB_USERNAME){
        try {
            $modules = \DB::table("modules")->where([["status","=",1],["is_sys" ,"=" ,0]])->get();
            if($modules){
                foreach ($modules as $key => $value) {
                    $urllist        = $value->route;
                    $strController  = strtoupper( substr( $urllist, 0, 1 ) ).substr( $urllist, 1 );
                    $strController  = $strController."Controller";
                    foreach ($routes as $key_route => $value_route) {
                        $controller      = $groupFolder.'\\'.$strController."@".$value_route['action'];
                        $frontendRoutes [] = [
                            "url"       => $urllist  ."/". $value_route["url"],
                            "controller" => $controller,
                            "name"      => $fixname."." .$urllist . $value_route["name"],
                            "type"      => $value_route["type"]
                        ];
                    }  
                }
            }
            $memu_items = \DB::table("menu_items")->join("menus","menus.id","=","menu_items.menu_id")->where([["menu_items.status","=",1],["menus.type" ,"=" ,0]])->get();
            foreach ($memu_items as $key => $value) {
                $controller      = $value->controller."@".$value->action;
                $frontendRoutes [] = [
                    "url"       => $value->path,
                    "controller" => $controller,
                    "name"      => $value->route_name,
                    "type"      => $value->method
                ];
            }
        } catch (Exception $e) {
            
        }
        
    }
    foreach ($frontendRoutes as $key => $value) {
      Route::{$value["type"]}($value["url"],$value["controller"])->name($value["name"]);
    }
    //custom fronten routes

     Route::get("duties/detail/{id?}","Frontend\DutiesController@detail")->name("frontend.duties.detail");

});
//!-------------------------------------frontend route----------------------------------------------------------.
