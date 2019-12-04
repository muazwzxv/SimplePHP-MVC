<?php

class Route{

    public static $validRoutes = array();

    public static function get($route,$function){
	        
	if($_SERVER['REQUEST_METHOD'] != "GET")
		return;

	self::invokeUserFunction($route, $function);
    }

    public static function post($route,$function){
	        
	if($_SERVER['REQUEST_METHOD'] != "POST")
		return;

	self::invokeUserFunction($route, $function);
    }

    public function invokeUserFunction($route, $function){
	array_push(self::$validRoutes, $route);		
	if($_GET['url'] == $route && in_array($_GET['url'], self::$validRoutes)){
		$function->__invoke();
		die();
        }
    }
}

?>
