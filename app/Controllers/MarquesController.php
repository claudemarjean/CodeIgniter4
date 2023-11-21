<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MarqueModel;

class MarquesController extends BaseController
{
    public function listeDesMarques()
    {
        $marqueModel = new MarqueModel();
        $marques = $marqueModel->findAll();
        return view('marque/marque_view',['marques'=>$marques]);
    }
    
    public function obtenirFormulaireAjout(){
        return view('marque/formulaire-marque');
    }

    public function addMarque(){
        $nomMarque = $this->request->getPost('nomMarque');
        $marqueModel = new MarqueModel();

        $data = [
            'nom'=> $nomMarque
        ];

        $marqueModel->insert($data);

        return redirect()->to('/marques');
    }
}
