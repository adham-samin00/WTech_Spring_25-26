<?php

include "../Model/db.php";
session_start();

$name = "";
$email = "";
$password = "";
$website = "";
$comment = "";
$gender = "";
$filePath = "";
$datafile = "../data.json";

$nameErr = "";
$emailErr = "";
$passwordErr = "";
$websiteErr = "";
$genderErr = "";
$fileErr = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
        $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";
        $website = isset($_POST["website"]) ? trim($_POST["website"]) : "";
        $comment = isset($_POST["comment"]) ? trim($_POST["comment"]) : "";
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
        $file = isset($_FILES["file"]) ? $_FILES["file"] : null;

        $flag = false;

        if(empty($name))
            {
                $nameErr = "Name is required";
                $flag = true;
            }
        else if(!preg_match("/^[a-zA-Z ]*$/", $name))
            {
                $nameErr = "Only letters and white spaces are allowed";
                $flag = true;
            }

        if(empty($email))
            {
                $emailErr = "E-mail is required";
                $flag = true;
            }
        else if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email))
            {
                $emailErr = "Invalid e-mail format";
                $flag = true;
            }

        if(empty($password))
            {
                $passwordErr = "Password is required";
                $flag = true;
            }
        else if(strlen($password) < 8)
            {
                $passwordErr = "Password must be at least 8 characters";
                $flag = true;
            }

        if(!empty($website))
            {
                if(!preg_match("/\b((https?:\/\/)?[a-zA-Z0-9-]+\.[a-zA-Z]{2,}(\/[a-zA-Z0-9#]+\/?)*)(\/)?\b/", $website))
                    {
                        $websiteErr = "Invalid URL";
                        $flag = true;
                    }
            }

        if(empty($gender))
            {
                $genderErr = "Gender is required";
                $flag = true;
            }

    if ($flag === false) {
        $_SESSION["name"] = $name;
        setcookie('name', $name, time() + 3600, "/");
        echo "Login Successful";

        $formdata = array("Name: " => $name, "Email: " => $email, "Website: " => $website, "Comment: " => $comment, "Gender: " => $gender);

        if(file_exists($datafile))
            {
                $existdata = file_get_contents($datafile);
                $tempdata = json_decode($existdata, true);
            }
            else
                {
                    $tempdata = array();
                }
        if(!is_array($tempdata))
            {
                $tempdata = array();
            }
        
            $tempdata [] = $formdata;
            $jsondata = json_encode($tempdata, JSON_PRETTY_PRINT);
        
        if(file_put_contents($datafile, $jsondata) !== false)
            {
                echo "Data Saved";
            }
            else
                {
                    echo "Please try again";
                }
            
            $data = file_get_contents($datafile);
            $mydata = json_decode($data);

    } 
    else {
        echo "Please try again!";
    }

    if (isset($_SESSION["name"]) || isset($_COOKIE["name"])) {
        echo " Welcome Back";
    } 
    else {
        echo " Please log in again!";
    }

    }

?>