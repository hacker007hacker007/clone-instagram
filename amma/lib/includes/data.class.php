<?php 

class data {
    public static $conn = null ;
    public static function dataconnection()
    {
    
        if (data::$conn == null) {
            $servername = "mysql.selfmade.ninja:3306";
            $username = "hacker";
            $password = "hacker007007007";
            $dbname = "hacker_auth";
            
            // Create connection
            $connection = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            } else {
                printf("new connection established....");
                data::$conn = $connection;
                return data::$conn;
            }
        } else {
            printf("return existing connection established....");
            return data::$conn;
        }
    }
}






?>