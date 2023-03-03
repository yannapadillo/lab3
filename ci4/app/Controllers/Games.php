<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Games extends BaseController
{
    public function index()
    {
        return view('game');
    }

    public function view($page = 'index')
    {
        if (! is_file(APPPATH . 'Views/game/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
    }
}