<?php
namespace App;

use App\Controllers\API\ApiHelloWorldController;
/*

    Register your web routes here.
    This can be done with $group.

    NOTE: The routes defined here will be defined as group routes.
    Read more about Slim 4 group routes here:
    http://www.slimframework.com/docs/v4/objects/routing.html#route-groups

    For more info about routing, visit:
    http://www.slimframework.com/docs/v4/objects/routing.html

*/

// TODO: Define your routes here
$group->get('', ApiHelloWorldController::class);