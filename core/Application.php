<?php
/**
 * User: Jamshid
 * Date:04.04.2023
 * Time:0:07
 */

namespace app\core;
class Application
{
    public Router $router;
    public Request $request;
    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request) ;
    }
    public function run()
    {
        $this->router->resolve();
    }
}