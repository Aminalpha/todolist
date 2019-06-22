<?php
class ConnectDatabase{
    static private $dbHost = "localhost";
    static private $dbName = "db_todolist";
    static private $dbUser = "root";
    static private $dbPwd = "";
    static private $connection = null;

    static public function connect(){
        try{
            self::$connection = new PDO("mysql:host=". self::$dbHost .";dbname=".self::$dbName, self::$dbUser, self::$dbPwd);
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

        return self::$connection;
    }

    static public function disconnect(){
        self::$connection = null;
    }
}











