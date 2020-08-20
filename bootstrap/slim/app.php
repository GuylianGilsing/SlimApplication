<?php
namespace App;

use DI\Container;
use Slim\Factory\AppFactory;
use App\Middleware\TrailingSlashMiddleware;
use Slim\Routing\RouteCollectorProxy;

// Register the container with the slim framework
$container = new Container();
AppFactory::setContainer($container);

$app = AppFactory::create();

require_once __DIR__.'/dependencies.php';

$app->addBodyParsingMiddleware();

// Middleware
$app->add(TrailingSlashMiddleware::class);

// Load API routes
$app->group('/api', fn(RouteCollectorProxy $group) => 
    require_once __DIR__.'/../../routes/api.php');

// Load web routes
require_once __DIR__.'/../../routes/web.php';

$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);

$app->run();