<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Games extends BaseController
{
    public function index()
    {
        return view('game/index');
    }
}