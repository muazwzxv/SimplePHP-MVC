
<?php

class Controller{

    public static function createView($view){
        $html = $view . '.html';
        echo $view;
    }
}

?>