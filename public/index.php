<?php

require_once __DIR__ . '/../app/bootstrap.php';

use App\Controllers\HomeController;

$controller = new HomeController();
$controller->index();

