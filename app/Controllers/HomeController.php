<?php

namespace App\Controllers;

use Monolog\Logger;

class HomeController extends BaseController
{
    public function __construct(Logger $logger)
    {
        parent::__construct($logger);
    }

    public function index(): void
    {
        $data = ['name' => 'John Doe'];
        echo $this->render('index.html', $data);
    }
}