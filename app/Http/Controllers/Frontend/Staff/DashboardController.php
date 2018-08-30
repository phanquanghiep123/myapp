<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Core\StaffController;
use Illuminate\Http\Request;

class DashboardController extends StaffController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return 'Staff - Dashboard';
    }
}
