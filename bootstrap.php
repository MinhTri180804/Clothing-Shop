<?php
define('_DIR_ROOT', __DIR__);
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $WEB_ROOT = 'https//:' . $_SERVER['HTTP_HOST'];
} else {
    $WEB_ROOT = 'http://' . $_SERVER['HTTP_HOST'];
}

$GET_ROOT_FOUNDER = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', strtolower(_DIR_ROOT));
$WEB_ROOT .= $GET_ROOT_FOUNDER;

define('_WEB_ROOT', $WEB_ROOT);
define('_CSS_BASE_PATH', _WEB_ROOT . "/app/view/assets/css/");
define('_JS_BASE_PATH', _WEB_ROOT . "/app/view/assets/js/");
define('_IMG_BASE_PATH', _WEB_ROOT . "/app/view/assets/images/");

require_once 'core/Route.php';
require_once 'app/App.php';
require_once 'core/Database.php';
require_once 'core/Controller.php';
