<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Core\FrontendController;
use Illuminate\Http\Request;
use Auth;
use Hash;
use DB;
use Validator;
use Cookie;
use Illuminate\Support\Facades\Redirect;
class AccountsController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();   
        $this->_VIEW = "accounts" ;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getlogin (){
        if($this->_USER) {
            return Redirect(route($this->_ROUTE_FIX .".dashboard")); 
        }
        $html = view($this->_VIEWFOLDER .".". $this->_VIEW . ".blocks.header",$this->_DATA)->render();
        $html .= view($this->_VIEWFOLDER .".". $this->_VIEW . ".login",$this->_DATA)->render();
        $html .=view($this->_VIEWFOLDER .".". $this->_VIEW . ".blocks.footer",$this->_DATA)->render();
        return $html;
    }
    public function postLogin(Request $request){
        if($this->_USER) {
            return Redirect(route($this->_ROUTE_FIX .".dashboard")); 
        }
        $_DATA = ["status" => "error","data" => null ,"messege" => null];
        $check = Validator::make($request->all(), [
            'id'    => 'required',
            'pwd' => 'required|min:6',
        ]);
        if ($check->fails()){
            $_DATA["messege"] = $check->errors();  
        }else{
            $id = $request->id;
            $password = $request->pwd;
            $remember = ($request->remember == 1) ? true : false;
            $mb = \App\Models\Users::where("user_id","=",$id)->first();
            if($mb){
                $email = $mb->email;
                if( Auth::attempt(['email' => $email, 'password' => $password, "is_sys" => 0], $remember) ){
                    session([ '_USERFRONTEND' => $mb]);
                    if($remember){
                        $mb->remember_token = bcrypt(uniqid());
                        $mb->save();
                        $minutes = ( 24 * 3 ) * 60 ;
                        Cookie::queue('remember',$mb->remember_token,$minutes);
                    }
                    return Redirect(route($this->_ROUTE_FIX .".dashboard"));
                }else{
                    $_DATA["messege"]["password"][] = "Password not match!" ;
                } 
            }else{
                $_DATA["messege"]["id"][] = "User ID not exsit!" ;
            }
        }
        $_DATA["messege"] = json_decode(json_encode($_DATA["messege"]),true);
        $js = ((json_encode($_DATA["messege"] )));
        $_DATA["messege"] = json_decode($js,true);
        return Redirect::back()->with("messege", $_DATA["messege"]);
    }
    public function logout(Request $request){
        $request->session()->forget('_USERFRONTEND');
        $request->session()->forget('_BACKURL');
        Cookie::queue(Cookie::forget('remember'));
        return redirect()->route($this->_ROUTE_FIX.".getlogin");
    }
}
