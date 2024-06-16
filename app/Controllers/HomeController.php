<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): void
    {
        echo $this->render('index.html', ['name' => 'John Doe']);
    }
}