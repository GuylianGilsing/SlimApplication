<?php
namespace App;

use Slim\Factory\AppFactory;
use DI\Container;

// Register the container with the slim framework
$container = new Container();
AppFactory::setContainer($container);

$app = AppFactory::create();

require_once __DIR__.'/dependencies.php';

$app->addBodyParsingMiddleware();

require_once __DIR__.'/../../routes/web.php';

$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);

$app->run();