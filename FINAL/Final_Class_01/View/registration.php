<?php
include "../Controller/registrationValidation.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Validation Example</title>
</head>

<body>
    <form method = "post" action = "">
        <table>
            <tr>
                <td><p style="color: red;">* required field</p></td>
            </tr>

            <tr>
                <td> <label for = "name"> Name: </label> </td>
                <td> 
                    <input type = "text" id = "name" name = "name"> <?php echo $name ?> 
                    <p style = "color:red"> <?php echo $nameErr ?> </p>
                </td> 
                <td> <p style = "color:red">*</p> </td>
            </tr>
            
            <tr>
                <td> <label for = "email"> Email: </label> </td>
                <td> 
                    <input type = "text" id = "email" name = "email"> <?php echo $email?> 
                    <p style = "color:red"> <?php echo $emailErr ?> </p>
                </td>
                <td> <p style = "color:red">*</p> </td>
            </tr>


            <tr>
                <td> <label for = "address"> Address: </label> </td>
                <td> 
                    <textarea id = "address" name = "address" rows = "4" cols = "30"> </textarea> <?php echo $address ?>
                    <p style = "color:red"> <?php echo $addressErr ?> </p>
                </td>
                <td> <p style = "color:red">*</p> </td>
            </tr>
            

            <tr>
                <td> <label for = "gender"> Gender: </label> </td>
                <td> <input type = "radio" id = "male" name = "gender"> <label for = "male">Male</label> </td>
                <td> <input type = "radio" id = "female" name = "gender"> <label for = "female">Female</label> <?php echo $gender ?> </td>
                <td> <p style = "color:red">*</p> </td>
            </tr>

            <tr>
                <td> <input type = "submit" id = "submit" name = "submit"> </td>
            </tr>

        </table>
    </form> 