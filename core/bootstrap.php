<?php

use App\Core\App;

use App\Database\{Connection,QueryBuilder};

App::bind('config', require 'config.php');

App::bind('database', new Querybuilder(
    Connection::make(App::get('config')['database']['sqlite'])
));

function view($name, $data = [])
{
    extract($data);
    return require "../views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}

function dd($var)
{
    echo "<pre>";
        print_r ($var);
    echo "</pre>";
    exit;
}
