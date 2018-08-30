<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Core\FrontendController;
class DutiesController extends FrontendController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        parent::__construct(); 
        $this->_VIEW = "duties";
    }

    /**
     * @return string
     */
    public function index()
    {   
        return view($this->_VIEWFOLDER.'.'.$this->_VIEW .'.index',$this->_DATA);
    }
    public function my()
    {   
        return view($this->_VIEWFOLDER.'.'.$this->_VIEW .'.my',$this->_DATA);
    }
    public function detail($id = null){
        return view($this->_VIEWFOLDER.'.'.$this->_VIEW .'.detail',$this->_DATA);
    }
}
