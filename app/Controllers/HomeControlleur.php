<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeControlleur extends BaseController
{
    public function index()
    {
        return view('hi_message');
    }
}
