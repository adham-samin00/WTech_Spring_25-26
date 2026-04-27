<?php

class db{
function connection()
{
$db_host = "localhost";
$db_user= "root";
$db_password="";
$db_name="registration"; 

$connection = new mysqli($db_host, $db_user, $db_password, $db_name);
if($connection->connect_error)
    {
        die ("Could not Connect Database".$connection->connect_error);
    }
return $connection;
}

function signup($connection, $tablename, $name, $email, $password, $website, $comment, $gender, $filepath)
{
    $sql= "INSERT INTO " .$tablename. " (name, email, password, website, comment, gender, filepath) VALUES ('".$name."', '".$email."', '".$password."', '".$website."', '".$comment."', '".$gender."', '".$filepath."')";
    $result = $connection->query($sql);
    return $result;
}

}

?>