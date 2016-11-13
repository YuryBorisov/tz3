<?php

ini_set("display_errors",1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

require "../app/Help/helpers.php";

switch(parse_url($_SERVER['REQUEST_URI'])['path'])
{
    case '/':
        (new \App\Controllers\HomeController())->index();
        break;
    case '/parents':
        echo (new \App\Controllers\HomeController())->getParents();
        break;
}