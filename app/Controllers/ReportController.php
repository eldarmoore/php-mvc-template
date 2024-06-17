<?php

namespace App\Controllers;

use Monolog\Logger;

class ReportController extends BaseController
{
    public function __construct(Logger $logger)
    {
        parent::__construct($logger);
    }

    public function index(): void
    {
        // Prepare data for the view
        $data = [
            'title' => 'Report Page',
            'content' => 'This is the report page content.'
        ];

        // Load the view with data
        echo $this->render('report.html', $data);
    }
}
