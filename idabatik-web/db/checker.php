<?php

require_once realpath(__DIR__. "../../vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$base_url = $_ENV["admin_base_url"];

$db_host = $_ENV["DB_HOST"];
$db_username = $_ENV["DB_USERNAME"];
$db_name = $_ENV["DB_NAME"];

?>