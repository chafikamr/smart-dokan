<?php

namespace APP\LIB;
use APP\Controllers\Admin\Main;
use APP\Controllers\Admin\Users;
use APP\Controllers\Admin\Store;
class AdminRouter
{
    public static function get( $controller , $action , $params )
    {
        /*
        ** This Function Handels All The Get Requests By The Admin User
        ** The Url is Split In The Front Controller in the following Form : 
        ** www.example.com/[{Controller}string]/[{Action}string]/[{params}array]
        */
  

        if( $controller == 'index'){ Main::index(); };

        if( $controller == 'users' && $action == 'default'){ Users::index(); };

        if( $controller == 'users' && $action == 'add'){view( 'users/create-user',[]); };

        if( $controller == 'orders' && $action == 'default'){view( 'orders/index',[]); };

        if( $controller == 'orders' && $action == 'new'){view( 'orders/new-orders',[]); };

        if( $controller == 'messanger' && $action == 'default'){view( 'messanger/index',[]); };

        if( $controller == 'settings' && $action == 'default'){view( 'settings/index',[]); };

        if( $controller == 'stock' && $action == 'default'){view( 'stock/index',[]); };

        if( $controller == 'tranches' && $action == 'default'){view( 'tranches/index',[]); };

        if( $controller == 'stores' && $action == 'default'){view( 'stores/index',[]); };

        if( $controller == 'charges' && $action == 'default'){view( 'charges/index',[]); };

        if( $controller == 'logout' && $action == 'default'){ logout(); };
        
        if( $controller == 'stores' && $action == 'add'){ view( 'stores/add-store',[]);  };

        
    }
    public static function post($request)
    {

        if( $request['route'] == 'stores/add' &&  $request['submit']  =="add_store"){
            
                Store::add($request);
         };
      

    }
}