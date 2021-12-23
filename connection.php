<?php

class Database
{
    private static $dbName = 'ajax' ;
    private static $dbHost = 'localhost';
    private static $dbUsername = 'root';
    private static $dbUserPassword = '';
     
    private static $con  = null;

    
     
    public function __construct() {
        die('Init function is not allowed');
    }
     
    public static function connect()
    {

       // One connection through whole application
       if ( null == self::$con )
       {     
          try
          {
            self::$con =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
          // self::$con = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             echo"Database connect succesfully"; 
          }
          catch(PDOException $e)
          {
            die($e->getMessage()); 
          }
       }
       return self::$con;
    }
     
    public static function disconnect()
    {
        self::$con = null;
    }
}

//$response = Database::connect();
e//cho "<pre>";
//print_r($response);exit;


?>