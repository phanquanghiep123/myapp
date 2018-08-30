<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Core\OfficerController;
use Illuminate\Http\Request;

class DutiesController extends OfficerController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('officers.duties');
    }
}
