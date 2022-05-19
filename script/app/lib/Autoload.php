<?php

namespace APP\LIB;

class Autoload 
{
    public static function autoload($className)
    {
        //remove Main Namespace
        $className = strtolower($className);
        $className = str_ireplace('APP' , '' , $className);
        $className = str_ireplace('\\' , DS , $className);
        $className = APP_ROOT . DS . 'app'  . $className . '.php';

        if(file_exists($className)){
            require_once $className;
        }else{
            echo 'Class Does Not Exist';
        }
    }
}

spl_autoload_register( __namespace__ . '\Autoload::autoload');