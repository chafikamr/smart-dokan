<?php



namespace APP\LIB;

class Database 
{

    public static function connect()
    {
        try{
            $dns = 'mysql:hostname='. DB_HOST . 'dbname=' . DB_NAME ;
            $connect = new PDO($dns,DB_USER,DB_PASS);
           echo 'connected succesfully';
        } catch(PDOException $e){
            echo 'Cannot Connect To Database :'  . $e->getMessage();
        }

        return $connect;
    }
}