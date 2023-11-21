<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MarqueModel;

class MarquesController extends BaseController
{

    public function __construct(){
        $this->marqueModel = new MarqueModel();
    }

    public function listeDesMarques()
    {
        $marques = $this->marqueModel->findAll();
        return view('marque/marque_view',['marques'=>$marques]);
    }
    
    public function obtenirFormulaireAjout(){
        return view('marque/formulaire-marque');
    }

    public function addMarque(){
        $nomMarque = $this->request->getPost('nomMarque');

        $data = [
            'nom'=> $nomMarque
        ];

        $this->marqueModel->insert($data);

        return redirect()->to('/marques');
    }

    public function deleteMarque($id){
        $this->marqueModel->delete($id);
        return redirect()->to('/marques');
    }
}
