<?php
include_once "includes/data.class.php";
include_once "includes/user.class.php";
include_once "includes/session.class.php";
function convert($name)
{
    include $_SERVER["DOCUMENT_ROOT"] . "/amma/temp/$name.php";
}

/*function hello($mail, $passwor, $name, $mobile)
{
    $servername = "mysql.selfmade.ninja:3306";
    $username = "hacker";
    $password = "hacker007007007";
    $dbname = "hacker_auth";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else{
        echo "data base was create succes";
    }
   $result = false;
    $sql = "INSERT INTO `auth` (`name`,`email`,`mobile`,`password`,`active`,`block`)
       VALUES ('$name','$mail','$mobile','$passwor','0','0');";

    try {
        return $conn->query($sql);
    } catch (Exception $c) {
        echo "Error; " . $sql . "<br>" . $conn->$result;
        return false;
    }



    /*  // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
 
     $sql = "INSERT INTO `auth` (`email`, `password`, `name`, `mobile`, `blocked`, `active`)
     VALUES ('$mail', '$passwor', '$name', '$mobile', '0', '0');";
 
     $result = false ;
     if ($conn->query($sql) === true) {
         $result = true ;
     } else {
         $result = false ;
     }
 
     $conn->close();
     return $result ;*/

