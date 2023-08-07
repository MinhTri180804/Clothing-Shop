<?php
class App
{
    private $__controller, $__action, $__params;

    public function __construct()
    {
        global $routes;
        if (!empty($routes['default_controller'])) {
            $this->__controller = $routes['default_controller'];
        } else {
            $this->__controller = 'Home';
        }
        $this->__action = 'index';
        $this->__params = [];
        $this->handleUrl();
    }

    public function getUrl()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        } else {
            $url = '/';
        }

        return $url;
    }

    public function handleUrl()
    {
        $url = $this->getUrl();
        $urlArr = array_filter(explode('/', $url));
        $urlArr = array_values($urlArr);
        // handle controller
        if (!empty($urlArr[0])) {
            $this->__controller = ucfirst($urlArr[0]);
        }

        if (file_exists('app/controller/' . ($this->__controller) . '.php')) {
            require_once 'app/controller/' . ($this->__controller) . '.php';
            if (class_exists($this->__controller)) {
                $this->__controller = new $this->__controller;
                unset($urlArr[0]);
            }
        } else {
            $this->loadError();
        }

        // handle action
        if (!empty($urlArr[1])) {
            $this->__action = $urlArr[1];
            unset($urlArr[1]);
        };

        // handle params
        $this->__params = array_values($urlArr);

        if (method_exists($this->__controller, $this->__action)) {
            call_user_func_array([$this->__controller, $this->__action], $this->__params);
        } else {
            $this->loadError();
        }
    }

    public function loadError($type = '404')
    {
        require_once 'app/errors/' . $type . '.php';
    }
}
