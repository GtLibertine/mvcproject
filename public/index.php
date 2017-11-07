<?php

require "../vendor/autoload.php";
require "../App/Router.php";

$router->dispatch($_SERVER["QUERY_STRING"]);
