<?php
define('ROOT', dirname(dirname(__FILE__)));
$queryString = $_SERVER['QUERY_STRING'];
require_once ROOT . DIRECTORY_SEPARATOR . 'Library' . DIRECTORY_SEPARATOR . 'FrontController.php';// подключает файл Library/FrontController.php
$frontController = FrontController::getInstance();//вызывает статический метод getInstance, который возвращает объект класса FronController
//если до этого он не был запущен, иначе возвращает уже запущенный
$frontController->run();
