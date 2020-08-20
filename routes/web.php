<?php
namespace App;

/*

    Register your web routes here.
    This can be done with $app.

    For more info, visit:
    http://www.slimframework.com/docs/v4/objects/routing.html

*/

use App\Controllers\HelloWorldController;
use App\Controllers\DatabaseController;

$app->get('/', HelloWorldController::class);

// DELETE THESE ROUTES WHEN GOING TO PRODUCTION
$app->get('/database/seed', DatabaseController::class.':seed');
$app->get('/database/migrate/up', DatabaseController::class.':migrateUp');
$app->get('/database/migrate/change', DatabaseController::class.':migrateChange');
$app->get('/database/migrate/down', DatabaseController::class.':migrateDown');