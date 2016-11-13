<?php

namespace App\Models;

use App\Help\LogFile;

class Connection
{

    private static $connection;

    public static function getConnection()
    {
        if (!self::$connection)
        {
            $db = require '../config/db.php';
            try
            {
                self::$connection = new \PDO(
                    $db['type'].':host='.$db['host'].';dbname='.$db['dbname'].';charset='.$db['charset'],
                    $db['user'],
                    $db['password'],
                    $db['opt']
                );
            }
            catch (\PDOException $e)
            {
                log_write($e->getMessage());
            }
        }
        return self::$connection;
    }

}