<?php

namespace APP\LIB;
use APP\LIB\AdminRouter;
use APP\LIB\ConfRouter;
use APP\LIB\Auth;



class FrontController
{
    
    
    public $_controller    = 'index';
    public $_action        = 'default';
    public $_params        = array();

    public function __construct($auth,$template)
    {
        $this->parseUrl();
        $user = $auth::checkUser();
        $url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

         //if user not logged 

         if($_SERVER['REQUEST_METHOD'] === 'GET'):

                if($url == '/login' && $user['user_type'] == 0 ){

                    view('login',[]);

                }elseif($user['user_type'] == 0 ){

                    header('location: /login');

                }
            

                if( $user['user_type'] == 1){
                  
                    AdminRouter::get( $this->_controller , $this->_action ,  $this->_params );
                }
                

                if($user['user_type'] == 2){
                    
                    ConfRouter::get( $this->_controller , $this->_action ,  $this->_params );


                };
         elseif($_SERVER['REQUEST_METHOD'] === 'POST'):

           
            if($url == '/login' && $user['user_type'] == 0 ){

                if(isset($_POST['login'])){

                    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
                    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
                    
                    Auth::login( $username , $password );
                }

            }elseif($user['user_type'] == 0 ){

                header('location: /login');

            }
        

            if( $user['user_type'] == 1){
                AdminRouter::post( $_REQUEST );
            }
            

            if($user['user_type'] == 2){
                
                ConfRouter::post( $this->_controller , $this->_action ,  $this->_params );


            }
         endif;
         
    }

    public function parseUrl()
    {

        $url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        $url = trim($url,'/');
        $url = explode('/',$url,3);

        if(isset($url[0]) && $url[0] !==''){
            
            $this->_controller = strtolower($url[0]);
        }
        if(isset($url[1]) && $url[1] !==''){

            $this->_action = strtolower($url[1]);

        }
        if(isset($url[2]) && $url[2] !==''){

            $this->_params = strtolower(explode('/',$url[2]));

        }

    }
   
}
