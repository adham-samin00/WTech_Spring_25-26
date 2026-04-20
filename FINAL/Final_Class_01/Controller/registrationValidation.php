<?php

$name = "";
$email = "";
$address = "";
$gender = "";
$website = "";


$nameErr = "";
$emailErr = "";
$addressErr = "";
$genderErr = "";
$websiteErr = "";



if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $website = $_POST["website"];
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
        


    }






?>
