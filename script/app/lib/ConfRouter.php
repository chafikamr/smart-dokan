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


        if( $controller == 'index' ){view('index',[]); };

        if( $controller == 'order' &&  $action == 'default' ){view('order/index',[]); };

        if( $controller == 'profile' && $action == 'default'){ view('profile/index',[]) ;};

        if( $controller == 'suiver' && $action == 'default'){ view('suiver/index',[]) ;};

        if( $controller == 'logout' ){ logout();};































        
    }
    public static function post()
    {

    }
}