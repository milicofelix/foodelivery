<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Página Incial (HOME) da área Restrita'
        ];

        return view('Admin/Home/index', $data);
    }
}
