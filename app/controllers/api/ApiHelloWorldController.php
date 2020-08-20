<?php
namespace App\Controllers\API;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Controllers\BaseController;

class ApiHelloWorldController extends BaseController
{
    public function __invoke(Request $request, Response $response)
    {
        $output = [
            'message' => "Hello World!"
        ];

        $output = json_encode($output);
        $response->getBody()->write($output);
        return $response->withHeader('Content-Type', 'application/json');
    }
}