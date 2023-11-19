<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MarqueModel;

class MarquesController extends BaseController
{
    public function index()
    {
        $marqueModel = new MarqueModel();
        $marques = $marqueModel->findAll();
        return view('marque/marque_view',['marques'=>$marques]);
    }
}
