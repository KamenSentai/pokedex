<?php

// Autoloaders
require_once '../vendor/autoload.php';
require_once '../includes/Autoloader.php';
\Pokedex\Autoloader::register();

// Framework
$settings  = ['displayErrorDetails' => true];
$app       = new \Slim\App(['settings' => $settings]);
$container = $app->getContainer();

// Settings
require_once '../includes/settings/config.php';
require_once '../includes/settings/container.php';

// Routes
require_once '../includes/routes/routing.php';

// Run
$app->run();