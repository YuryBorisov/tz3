<?php

namespace App\Models;

abstract class Model
{

    protected $pdo;

    function __construct()
    {
        $this->pdo = Connection::getConnection();
    }

}