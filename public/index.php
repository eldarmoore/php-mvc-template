<?php

require_once __DIR__ . '/../app/bootstrap.php';

use App\Controllers\HomeController;
use App\Controllers\ReportController;

// Simple routing logic
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        $controller = new HomeController();
        $controller->index();
        break;
    case '/report':
        $controller = new ReportController();
        $controller->index();
        break;
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
