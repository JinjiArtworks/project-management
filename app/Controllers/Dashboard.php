<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('client/dashboard/index');
    }
    public function detailTicket()
    {
        return view('client/dashboard/detail-ticket');
    }
}
