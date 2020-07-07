<?php

// FRONT CONTROLLER

// 1. Общие настройки

ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();


// 2. Подключение файлов системы

define('ROOT', dirname(__FILE__));
require_once ROOT . '/vendor/autoload.php';

// 3. Вызор Router

$router = new md124\components\Router();
$router->run();
