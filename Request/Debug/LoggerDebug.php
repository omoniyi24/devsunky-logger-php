<?php

namespace devsunky\Logger;
class LoggerDebug
{
    function Debug($payload)
    {
        var_dump("Logging Debug");
        return $payload;
    }
}