<?php
// echo 'test';
// echo 'sara';
// echo '<pre>';
// print_r($_SERVER);
// echo $_SERVER['QUERY_STRING'];

define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS.'app');
define("CONFIG",APP.DS.'config');
define("CONTROLLERS",APP.DS.'controllers');
define("CORE",APP.DS.'core');
define("MODELS",APP.DS.'models');
define("VIEWS",APP.DS.'views');

//config
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","first");
define("DATABASE_TYPE","mysql");
define("DOMANE_NAME","http://localhost/fs8/mvc/public/");



// echo VIEWS;
// echo APP;
// echo DS;
// require_once(CORE."/app.php");

require_once("../vendor/autoload.php");

$app = new MVC\core\app();