<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Access-Control-Allow-Origin: *");
header("Content-Type: undefined");
header("Access-Control-Allow-Headers: accept, authorization, content-type");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");

require 'vendor/autoload.php';
$app = new Slim\App();

require './api/dbHandler.php';
require './api/user.php';
require './api/dbConnect.php';

$app->run();
