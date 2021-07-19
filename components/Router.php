<?php

class Router
{
private $routes;
	
	public function __construct()
	{
	    $routesPath = ROOT . '/config/routes.php';
	    $this->routes = include($routesPath);
	}

   
	private function getUri()
	{
	    if(!empty($_SERVER['REQUEST_URI'])) {
	        return trim($_SERVER['REQUEST_URI'], '/');
	    }
	}
	
	
	public function Run()
	{
	    $uri = $this->getUri();
	   foreach($this->routes as $k => $v) 
	   {
		   if(preg_match("~$k~", $uri)) 
		   {
			   $internalRoute = preg_replace("~$k~", $v, $uri);
			   $segments = explode('/', $internalRoute);
			   $controllerName = array_shift($segments) . 'Controller';
			   $controllerName = ucfirst($controllerName);
			   $actionName = 'action' . ucfirst(array_shift($segments));
			   $parameters = $segments;

			   $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
			   if(file_exists($controllerFile)) {
				   include_once($controllerFile);
			   }

			   $controllerObject = new $controllerName();
			   $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
			   if($result != null) {
				   break;
			   }
		   }
	   }
		
	}
	
	
}

 