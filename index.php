<?php 

define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Autoload.php');

session_start();
$a = new Router();
$a->Run();


$a = 'about/index';


		/* 	   $segments = explode('/', $a);
               echo '<pre>';
               print_r($segments);
               echo '<br>';
			   $controllerName = array_shift($segments).'Controller';

               echo '<pre>';
               print_r($segments);
               echo '<br>';

               echo '<pre>';
               print_r($controllerName);
               echo '<br>';
			   $controllerName = ucfirst($controllerName);
               echo '<pre>';
               print_r($controllerName);
               echo '<br>';
			   $actionName = 'action'.ucfirst(array_shift($segments));
               echo '<pre>';
               print_r($actionName);
               echo '<br>';
               echo '<pre>';
               print_r($segments);
               echo '<br>';  */

?>