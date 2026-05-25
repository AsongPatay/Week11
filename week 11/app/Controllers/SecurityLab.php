<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SecurityLab extends BaseController
{
    public function index()
    {
        return view('form');
    }

    public function submit()
    {
        $data = [
            'user_input' => $this->request->getPost('user_input', FILTER_UNSAFE_RAW),
        ];

        return view('form', $data);
    }
}
