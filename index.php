<?php

// Cargar Slim Framework y Eloquent a través de Composer
require 'vendor/autoload.php';
require 'App.php';

$app = (new App())->get();
$app->run();



?>
