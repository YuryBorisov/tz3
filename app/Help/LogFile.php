<?php

namespace App\Help;

class LogFile implements ILog
{

    const path = '../storage/logs/log.txt';

    public function write($mess)
    {
        file_put_contents(self::path, $mess ."\n", FILE_APPEND);
    }

}