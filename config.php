<?php
/**
 * Created by PhpStorm.
 * User: osmium
 * Date: 09/01/15
 * Time: 01:34 PM
 */
define("BASE_WEB", "http://localhost/powerpmv/");
define("API_KEY", "asdfg");
define("URL_BACKEND", "http://192.168.1.1:8000/backend");
define("PROJECT_DIR", dirname(__FILE__));

require_once 'vendor/autoload.php';
//include tools
include_once PROJECT_DIR . "/include/boot.php";

//load models
require_once PROJECT_DIR . '/models/autoload.php';

//load views
global $twig;
$loader = new Twig_Loader_Filesystem(PROJECT_DIR . '/templates');
$twig = new Twig_Environment($loader);

$app = new \Slim\Slim();
$app->config(array(
    'debug' => true,
    'templates.path' => 'templates'
));

include_once PROJECT_DIR . '/views/autoload.php';
include_once PROJECT_DIR . '/routes.php';
