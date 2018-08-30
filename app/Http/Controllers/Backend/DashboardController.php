<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Core\BackendController;
use Illuminate\Http\Request;
use Auth;
use DB;
use Cookie;
class DashboardController extends BackendController
{
    public function __construct()
    {
        parent::__construct();   
        $this->_VIEW = 'dashboard';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        return view($this->_VIEWFOLDER.".".$this->_VIEW . ".index",$this->_DATA);
    }
    public function getlogout (Request $request){
        $request->session()->forget('_USER');
        $request->session()->forget('_BACKURL');
        Cookie::queue(Cookie::forget('remember'));
        return redirect()->route($this->_ROUTE_FIX.".getlogin");
    }
    public function notallow(){
        return view($this->_VIEWFOLDER.".".$this->_VIEW . ".notallow",$this->_DATA);
    }
    public function notallowajax(){
        return \Response::json(
            [
                "status"    => "error",
                "data"      => null,
                "message"   => "You do not have permission to use this action!"
            ]
        );
    }
}
