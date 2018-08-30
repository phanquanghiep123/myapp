<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Core\FrontendController;
class DashboardController extends FrontendController
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
    {   
        return view($this->_VIEWFOLDER.'.dashboard',$this->_DATA);
    }
}
