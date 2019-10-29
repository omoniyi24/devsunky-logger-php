<?php
namespace devsunky\Logger;
include "LogService.php";
class TestServices
{

    function test($payload){

//        $debug = new LogService();
//        $response = $debug->Debug($payload);
//        return $response;

//        $info = new LogService();
//        $response = $info->Info($payload);
//        return $response;
//
        $error = new LogService();
        $response = $error->Error($payload);
        return $response;
    }
}


$testLogger = new TestServices();
$payload = "Good";
$resp = $testLogger->test($payload);
var_dump($resp);