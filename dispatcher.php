<?php

class Dispatcher
{

    private $request;

    public function dispatch()
    {
        #die(" I am here!");
        $this->request = new Request(); # Instance an object from this classs

        Router::parse($this->request->url, $this->request);

        $controller = $this->loadController(); # Return name controller

        #die($controller); # testController

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = $this->request->controller . "Controller";
        #die($name);
        $file = ROOT . 'Controllers/' . $name . '.php';
        #die($file);
        require($file);
        $controller = new $name(); # testController
        return $controller;
    }

}
?>