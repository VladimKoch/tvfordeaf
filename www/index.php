<?php


// phpinfo();

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

declare(strict_types=1);

// echo __DIR__ . '/../app/Bootstrap.php';
// exit;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/Bootstrap.php';



$bootstrap = new App\Bootstrap;
$container = $bootstrap->bootWebApplication();
$application = $container->getByType(Nette\Application\Application::class);
$application->run();
