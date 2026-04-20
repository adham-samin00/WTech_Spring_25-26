<?php

$name = "";
$email = "";
$address = "";
$gender = "";

$nameErr = "";
$emailErr = "";
$addressErr = "";
$genderErr = "";



if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    


        if(empty($name))
            {
                $nameErr = "Name field cannot be empty";
            }
        else if(!preg_match("/^[a-zA-Z-' ]*$/", $name))
            {
                $nameErr = "Only letters and whitespaces are allowed";
            }
        
        if(empty($email))
            {
                $emailErr = "Email is required";
            }
        else if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email))
            {
                $emailErr = "Invalid email format";
            }
        
        if(empty($address))
            {
                $addressErr = "Address field is required";
            }
    }






?>
