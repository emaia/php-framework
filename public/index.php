<?php

require '../vendor/autoload.php';
require '../core/bootstrap.php';

use App\Core\{Request,Router};

Router::load('../core/routes.php')
    ->direct(
        Request::uri(),
        Request::method()
    );
