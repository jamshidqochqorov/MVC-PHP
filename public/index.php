<?php
require_once __DIR__ .'/../vendor/autoload.php';
/**
 * User: Jamshid
 * Date:04.04.2023
 * Time:0:07
 */
use app\core\Application;



$app = new Application(dirname(__DIR__));

$app->router->get('/','home');
$app->router->get('/contact','contact');
$app->run();