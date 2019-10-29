<?php

namespace devsunky\Logger;
class LoggerError
{
    function Error($payload)
    {
        var_dump( "Logging Error");
        return $payload;
    }
}