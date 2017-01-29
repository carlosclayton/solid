<?php
/**
 * Created by PhpStorm.
 * User: Clayton
 * Date: 28/01/17
 * Time: 21:43
 */

require_once "vendor/autoload.php";


use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('log');
$log->pushHandler(new StreamHandler('log/app.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');