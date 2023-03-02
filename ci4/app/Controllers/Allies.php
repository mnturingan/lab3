<?php

namespace App\Controllers;

use App\Models\AlliesModel;

class Allies extends BaseController
{
    public function index()
    {
        $model = model(AlliesModel::class);

        $data = [
            'allies'  => $model->getAllies(),
            'title' => 'Alliances',
        ];

        return view('templates/header', $data)
            . view('allies/index')
            . view('templates/footer');
    }
	
	public function join()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Join the alliance'])
                . view('allies/join')   
                . view('templates/footer');
        }

        $post = $this->request->getPost(['firstname', 'lastname', 'email', 'website', 'comment', 'gender']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'firstname' => 'required|max_length[255]|min_length[3]',
            'lastname' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|min_length[3]',
            'website' => 'required|max_length[255]|min_length[3]',			
            'gender' => 'required|max_length[255]|min_length[3]',			
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Join Alliance'])
                . view('allies/join')
                . view('templates/footer');
        }

        $model = model(AlliesModel::class);

        $model->save([
            'firstname' => $post['firstname'],
            'lastname' => $post['lastname'],
            'email'  => $post['email'],
            'website'  => $post['website'],
            'gender'  => $post['gender'],
        ]);

        return view('templates/header', ['title' => 'Join Alliance'])
            . view('allies/success')
            . view('templates/footer');
    }
}	