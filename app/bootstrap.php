<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// create a log channel
$log = new Logger('app');
$log->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', Logger::DEBUG));
$log->info('App has started');