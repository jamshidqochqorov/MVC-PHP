<?php
/**
 * User: Jamshid
 * Date:04.04.2023
 * Time:0:07
 */
use app\core\Application;


require_once __DIR__.'/vendor/autoload.php';
$app = new Application();

$app->router->get('/',function (){
    return "Hello word";
});
$app->router->get('/contact',function (){
    return "Contact";
});
$app->run();