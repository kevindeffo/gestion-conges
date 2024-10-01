<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Acceuil extends BaseController
{
    public function index()
    {
        return view('acceuil');
    }
}
