<?php

class Route{

    public static $validRoutes = array();

    public static function set($route,$function){

	array_push(self::$validRoutes, $route);
		
	/*var_dump($_GET);
	echo "</br>";
	var_dump($_POST);
	echo "</br>";
	echo "</br>";*/
	if($_GET['url'] == $route){
		$function->__invoke();
		die();
        }
    }
}

?>
