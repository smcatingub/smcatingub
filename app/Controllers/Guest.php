<?php

namespace App\Controllers;

use App\Models\GuestModel;

class Guest extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

        $data = [
            'guest'  => $model->getGuest(),
            'title' => 'Guest archive',
        ];

        return view('templates/header', $data)
            . view('guest/index')
            . view('templates/footer');
    }

    public function new()
    {
        helper('form');

        return view('templates/header', ['title' => 'Drop a comment!'])
            . view('guest/create')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['name', 'email', 'comment']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'name' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|valid_email',
            'comment'  => 'required|max_length[5000]|min_length[3]',
        ])) {
            // The validation fails, so returns the form.
            return redirect()->to('/guest/new')->withInput()->with('errors', $this->validator->getErrors());
        }

        // Gets the validated data.
        $post = $this->request->getPost(['name', 'email', 'comment']);

        $model = model(GuestModel::class);

        $model->save([
            'name' => $post['name'],
            'email' => $post['email'],
            'comment'  => $post['comment'],
        ]);

        return view('guest/success');
    }

}