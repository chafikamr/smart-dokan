<?php

use APP\LIB\Auth;
function view($view , $data){


    $role = Auth::checkUser() ;

    switch($role['user_type']){
        case 1: $role = 'admin';
        break;
        case 2: $role ='confirmation';
        break;
        default : $role =false;
    }

    if($role){
        $file =  APP_ROOT. DS .'app'. DS .'views'.DS . $role .DS . $view .'.view.php';
    }else{
        $file =  APP_ROOT. DS .'app'. DS .'views'.DS . $view .'.view.php';
    }



   

    if(file_exists($file)){
        extract( $data );
        include_once($file);
    }else{
        echo 'view oies not exist' . $file;
    }
}

function get_base_url($path=''){

    $ssl = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';
    return $ssl . '://'. $_SERVER['SERVER_NAME'] . $path;
    
    
   
}



function logout()
{
    session_destroy(); 
            header("Location: http://crm.test");
            exit;
}