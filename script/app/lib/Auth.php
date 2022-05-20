<?php

namespace APP\LIB;
use APP\Models\User;


class Auth
{

    public static function checkUser()
    {
        /* 
        ** This function Returns 
        ** ----------------------
        **[ User_Type ]
        **      [0] Not Logged In
        **      [1] Admin
        **      [2] Confirmation
        **
        ** [ User_name ]
        **      username of user
        ** [ User_id  ]
        **      primary key of user In Database
        */

        if(isset( $_SESSION['user']) ){
          
            
            return [
                'user_type' =>$_SESSION['user']['user_type'] ,
                'user_name' => $_SESSION['user']['user_username'] ,
                'user_id' => $_SESSION['user']['user_id']             
            ];




            
        }else{

            return [
                'user_type' =>0 ,
                'user_name' => '',
                'user_id' => ''            
            ];

        }
        
    }


    public static function login($username , $password )
    {

           /*
           ** FILTER 01/03
           ** Filter Inputs ( username and password )
           */
           $user = User::checkCredentials( $username , $password );

           if(!$user){

              view('login',['message'=>'invalid login']);

           }else{
             $_SESSION['user'] = [
                 'user_id' => $user['user_id'],
                 'user_username' => $user['user_username'],
                 'user_type' => $user['user_type']
                 
             ];

            header('location: /');

          
           }
    }
}