<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Core\FrontendController;
class HomeController extends FrontendController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        parent::__construct();
    }
    /**
     * @return string
     */
    public function index()
    {   if($this->_USER) {
            return Redirect(route($this->_ROUTE_FIX .".dashboard")); 
        }
        return view($this->_VIEWFOLDER.'.home',$this->_DATA);
    }
}
