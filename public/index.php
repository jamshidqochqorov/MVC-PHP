<?php
require_once __DIR__ .'/../vendor/autoload.php';
/**
 * User: Jamshid
 * Date:04.04.2023
 * Time:0:07
 */

use app\controllers\SiteController;
use app\core\Application;



$app = new Application(dirname(__DIR__));

$app->router->get('/',[SiteController::class,'home']);
$app->router->get('/contact','contact');
$app->router->get('/blog','blog');
$app->router->post('/contact',[SiteController::class,'handlecontact']);
$app->run();
