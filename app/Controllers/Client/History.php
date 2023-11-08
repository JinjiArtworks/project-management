<?php

namespace App\Controllers\Client;


use App\Controllers\BaseController;

class History extends BaseController
{
    public function index()
    {
        return view('client/history/index');
    }
}
