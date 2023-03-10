<?php

class user
{
    public static function signup($email, $password, $namee, $mobilee)
    {   
        $password = md5($password);
        $conn = data::dataconnection();
        $sql = "INSERT INTO `auth` (`mail`, `password`, `name`, `mobile`, `active`, `block`)
        VALUES ('$email', '$password', '$namee', '$mobilee', '0', '1');";
        $result = false;
        try {
            return $conn->query($sql);
        } catch (Exception $e) {
            echo "Error; " . $sql . "<br>" . $conn->$result;
            return false;
        }

    }

}
