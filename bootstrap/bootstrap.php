<?php
namespace App;

require_once __DIR__.'/../resources/php/functions.php';

StartSession();

require_once __DIR__.'/phpdotenv/environment.php';
require_once __DIR__.'/eloquent/database.php';
require_once __DIR__.'/slim/app.php';