<?php

class Route{

    public static $validRoutes = array();

    public static function set($route,$function){

	array_push(self::$validRoutes, $route);
        //self::$validRoutes[] = $route;

        //print_r(self::$validRoutes);
        if($_GET['url'] == $route){
            $function->__invoke();
        }
    }
}

?>
