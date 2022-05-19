<?php

namespace APP\LIB;

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
        return [
            'user_type' => 2 ,
            'user_name' => '',
            'user_id' => ''            
        ];
    }
}