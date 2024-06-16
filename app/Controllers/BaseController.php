<?php

namespace App\Controllers;

use Monolog\Logger;
use Twig\Environment;
use Twig\Error\Error;
use Twig\Loader\FilesystemLoader;

class BaseController
{
    /**
     * @var Environment
     */
    protected Environment $twig;

    /**
     * @var Logger
     */
    protected Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
        $loader = new FilesystemLoader(__DIR__ . '/../Views');
        $this->twig = new Environment($loader);
    }

    /**
     * Render a Twig template and log potential errors
     *
     * @param  string  $template
     * @param  array  $parameters
     * @return string
     */
    protected function render(string $template, array $parameters = []): string
    {
        try {
            return $this->twig->render($template, $parameters);
        } catch (Error $e) {
            $this->logger->error('Twig error: ' . $e->getMessage());
            return 'There was an error! Template not found!';
        } catch (\Exception $e) {
            $this->logger->error('Uncaught Exception: ' . $e->getMessage());
            return '';
        }
    }
}