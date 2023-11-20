<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AddMarquesController extends BaseController
{
    public function index()
    {
        $data = $this->request->getPost();
        var_dump($data);
    }
}
