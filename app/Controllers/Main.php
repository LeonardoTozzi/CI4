<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Main extends BaseController
{
    public function index()
    {
       echo "Este é o index";
    }

    public function teste1()
    {
        echo "Este é o teste 1";
    }
    public function teste2()
    {
        echo "Este é o teste 2";
    }
}
