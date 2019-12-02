<?php
    function __autoload($class_name){

        if(file_exists('classes/'.$class_name.'.php')){
            require_once 'classes/'.$class_name.'.php';
        }
        else if(file_exists('Controller/'.$class_name.'.php')){
            require_once 'Controller/'.$class_name.'.php';
        }
    }
    
   spl_autoload_register('__autoload');
?>
