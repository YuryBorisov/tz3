<?php

function app()
{
    return require '../config/app.php';
}

function view($name, $data)
{
    return require app()['path_views'].$name.'.php';
}

function json($response)
{
    return json_encode($response);
}

function log_write($message, $type = 'file')
{
    switch ($type)
    {
        case 'file':
            (new \App\Help\LogFile())->write($message);
            break;
    }
}