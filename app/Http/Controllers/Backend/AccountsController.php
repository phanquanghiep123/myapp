<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use DB;
use Validator;
use Cookie;
use Illuminate\Support\Facades\Redirect;
class AccountsController extends Controller
{
	public $_VIEW  = "acount/";
    public $_VIEWFOLDER  = "backend/";
    public $_USER = null;
    public $_ROUTE_FIX  = "backend";
    public function __construct()
    {
        $this->_USER = session('_USER'); 
        $this->_DATA["_SEFF"] = $this; 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getlogin (){
        if($this->_USER) {
            return Redirect(route("admin.dashboard")); 
        }
        $html = view($this->_VIEWFOLDER . $this->_VIEW . "blocks/header",$this->_DATA)->render();
        $html .= view($this->_VIEWFOLDER . $this->_VIEW . "login",$this->_DATA)->render();
        $html .=view($this->_VIEWFOLDER . $this->_VIEW . "blocks/footer",$this->_DATA)->render();
        return $html;
    }
    public function postLogin(Request $request){
        if($this->_USER) {
            return Redirect(route("admin.dashboard")); 
        }
        $_DATA = ["status" => "error","data" => null ,"messege" => null];
        $check = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);
        if ($check->fails()){
            $_DATA["messege"] = $check->errors();
        }else{
            $email    = strtolower($request->email);
            $password = $request->password;
            $remember = ($request->remember == 1) ? true : false;
            if( Auth::attempt(['email' => $email, 'password' => $password, "is_sys" => 1], $remember) ){
                $record = Auth::user();
                session([ '_USER' => $record]);
                if($remember){
                    $record->remember_token = bcrypt(uniqid());
                    $record->save();
                    $minutes = ( 24 * 3 ) * 60 ;
                    Cookie::queue('remember',$record->remember_token,$minutes);
                }
                $_DATA["status"] = "success";
                $_DATA["data"] = asset($this->_VIEWFOLDER);
            }        
        }
        return json_encode($_DATA);
    }
}
