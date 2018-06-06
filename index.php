<?php 
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__FILE__)) . DS);
require_once("config/autoload.php");
config\Autoload::Run();
//$est = new models\estudiante();
//$est->hola();
require_once 'views/template.php';
config\Routes::run(new config\request());
//echo "Hola mundo desde index.php";