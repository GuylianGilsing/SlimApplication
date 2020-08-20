<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Controllers\BaseController;

// Migrations
use App\Database\Migrations\UsersMigration;

// Seeds
use App\Database\Seeds\UserSeed;

class DatabaseController extends BaseController
{
    public function seed(Request $request, Response $response)
    {
        $output = "Seeding";

        UserSeed::run();

        $response->getBody()->write($output);
        return $response;
    }

    public function migrateUp(Request $request, Response $response)
    {
        $output = "Migrating up";

        UsersMigration::up();

        $response->getBody()->write($output);
        return $response;
    }
    
    public function migrateChange(Request $request, Response $response)
    {
        $output = "Migrating changes";

        UsersMigration::change();

        $response->getBody()->write($output);
        return $response;
    }

    public function migrateDown(Request $request, Response $response)
    {
        $output = "Migrating down";

        UsersMigration::down();

        $response->getBody()->write($output);
        return $response;
    }
}