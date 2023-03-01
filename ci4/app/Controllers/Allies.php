<?php

namespace App\Controllers;

use App\Models\AlliesModell;

class Allies extends BaseController 
{
    public function index ()
    {
        $model = model (AlliesModel::class);

        $data = [
            'allies' => $model->getAllies(),
            'title' => 'Alliances',
        ];

        return view('templates/header', $data)
            . view('allies/index')
            . view('templates/footer');
    }
}