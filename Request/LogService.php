<?php
namespace devsunky\Logger;
include "Debug/LoggerDebug.php";
include "Info/LoggerInfo.php";
include "Error/LoggerError.php";
class LogService
{
    public function debug($payload){

        $debug = new LoggerDebug();
        $response = $debug->Debug($payload);
        return $response;
    }

    public function info($payload){

        $info = new LoggerInfo();
        $response = $info->Info($payload);
        return $response;
    }

    public function error($payload){

        $error = new LoggerError();
        $response = $error->Error($payload);
        return $response;
    }

}

