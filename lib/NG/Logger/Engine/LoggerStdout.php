<?php

namespace NG\Base\Loger\Engine;

class LoggerStdout extends Logger
{
    public function log($level, $message, array $context = array())
    {
        echo parent::log($level, $message, $context);
    }
}