<?php

namespace App\Controllers;

class ReportController
{
    public function index()
    {
        // Prepare data for the view
        $data = [
            'title' => 'Report Page',
            'content' => 'This is the report page content.'
        ];

        // Load the view with data
        $this->loadView('report', $data);
    }

    private function loadView($view, $data = [])
    {
        extract($data);
        require __DIR__ . '/../Views/' . $view . '.php';
    }
}
