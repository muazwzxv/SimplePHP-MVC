
<?php

class Controller{

    public static function createView($view){
	    $path = '/../Views/'.$view . '.html';
	    $path =  __DIR__.$path;
	    //var_dump($path);
	    include ($path);
    }
}

?>
