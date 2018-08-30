<?php

namespace App\Http\Controllers\ComUser;

use App\Http\Controllers\Core\ComUserController;
use Illuminate\Http\Request;

class DashboardController extends ComUserController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return 'Com User - Dashboard';
    }
}
