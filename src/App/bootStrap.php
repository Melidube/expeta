<?php

declare(strict_types=1);

namespace App;

require __DIR__ . "/../../vendor/autoload.php";

use Dotenv\Dotenv;

use Framework\App;
use App\Config\Paths;


use function App\Config\{registerRoutes,registerMiddleware};

$dotenv = Dotenv::createImmutable(Paths::ROOT);
$dotenv->load();

$app = new App(Paths::SOURCE . "App/container-definitions.php");

registerRoutes($app);
registerMiddleware($app);

//dd($app);

return $app;