<?php

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

$nameErr = "";
$emailErr = "";
$websiteErr = "";
$genderErr = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = isset($_POST["name"]) ? $_POST["name"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $website = isset($_POST["website"]) ? $_POST["website"] : "";
        $comment = isset($_POST["comment"]) ? $_POST["comment"] : "";
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";

        $name = isset($_REQUEST["name"]) ? $_REQUEST["name"] : "";
        $email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : "";
        $website = isset($_REQUEST["website"]) ? $_REQUEST["website"] : "";
        $comment = isset($_REQUEST["comment"]) ? $_REQUEST["comment"] : "";
        $gender = isset($_REQUEST["gender"]) ? $_REQUEST["gender"] : "";

        if(empty($name))
            {
                $nameErr = "Name is required";
            }
        else if(!preg_match("/^[a-zA-Z ]*$/", $name))
            {
                $nameErr = "Only letters and white spaces are allowed";
            }

        if(empty($email))
            {
                $emailErr = "E-mail is required";
            }
        else if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email))
            {
                $emailErr = "Invalid e-mail format";
            }

        if(!empty($website))
            {
                if(!preg_match("/\b((https?:\/\/)?[a-zA-Z0-9-]+\.[a-zA-Z]{2,}(\/[a-zA-Z0-9#]+\/?)*)(\/)?\b/", $website))
                    {
                        $websiteErr = "Invalid URL";
                    }
            }

        if(empty($gender))
            {
                $genderErr = "Gender is required";
            }
    }

?>