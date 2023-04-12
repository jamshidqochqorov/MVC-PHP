<?php
namespace app\controllers;




use app\core\Controller;

class SiteController extends Controller
{

    public function home()
    {
        $params = [
             'name'=>'theJamshid'
        ];
        return $this->render('home',$params);
    }
    public function handlecontact()
    {
        return "handling submitted data";
    }
}