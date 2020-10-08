<?php

require_once __DIR__ . '/vendor/autoload.php';

use Src\Controller;
use Src\AuthController;
use Carbon\Carbon;

// $con = new Controller;
// $auth = new AuthController;


// printf("Right now is %s", Carbon::now()->toDateTimeString()."\n");
// printf("Right now in indonesia is %s", Carbon::now('Asia/Jakarta'));

$tomorrow = Carbon::now('Asia/Jakarta')->addDay(7);
print($tomorrow);
$lastWeek = Carbon::now()->subWeek();
$nextSummerOlympics = Carbon::createFromDate(2016)->addYears(4);
