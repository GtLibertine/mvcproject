<?php

require "../vendor/autoload.php";

$env = new \Dotenv\Dotenv(dirname(__DIR__));
$env->load();

require "../Core/Database.php";