<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;

class MyRequest extends BaseController
{
    public function index()
    {
        return view('client/my-request/index');
    }
}
