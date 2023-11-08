<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class AdminDashboard extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }
    public function listCompany($id)
    {
        return view('admin/list-company');
    }
}
