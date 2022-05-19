<?php

namespace APP\LIB;
use APP\Controllers\Confirmation\Main;
class ConfRouter
{

    public static function get( $controller , $action , $params )
    {
        /*
        ** This Function Handels All The Get Requests By The Admin User
        ** The Url is Split In The Front Controller in the following Form : 
        ** www.example.com/[{Controller}string]/[{Action}string]/[{params}array]
        */


        if( $controller == 'index'){ Main::index(); };





























        
    }
    public static function post()
    {

    }
}