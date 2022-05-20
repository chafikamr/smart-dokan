<?php

namespace APP\Models;
use APP\Models\AbstractModel;
use APP\LIB\Database;
Class User  extends AbstractModel
{

    public static function CheckCredentials( $username , $password )

    {

        /*
        ** Check User Login using Emailor Username And Password 
        ** Needs PDO filter
        ** Returns false if not exists Or User Array If Exist
        ** Called By [ APP/Lib/Auth ]
        */
          $connect = Database::connect();
          $sql = 'select * from oms_users WHERE user_username = :username AND  user_password= :password';
          $prepared = $connect->prepare($sql);
          $prepared->bindParam(':username',$username);
          $prepared->bindParam(':password',$password);
          $prepared->execute();

          $res = $prepared->fetchAll();

            if(count($res) == 1 ){
                return $res[0] ; 
            }else{
                return false;
            };
        
    }
}