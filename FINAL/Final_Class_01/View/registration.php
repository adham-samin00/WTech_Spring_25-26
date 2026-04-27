<?php
include "../Controller/registrationValidation.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><p style='color: red'> * Required Field </p></td><br>
                </tr>

                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" id="name" name="name" <?php echo $name; ?>> <span style = "color:red"><?php echo $nameErr?> </span> </td>
                    <td><p style='color: red'>*</p></td>
                </tr>

                <tr>
                    <td><label for="email">E-mail:</label></td>
                    <td><input type="text" id="email" name="email" <?php echo $email; ?>> <span style = "color:red"> <?php echo $emailErr?> </span> </td>
                    <td><p style='color: red'>*</p></td>
                </tr>

                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password"> <span style="color:red"> <?php echo $passwordErr?> </span> </td>
                    <td><p style='color: red'>*</p></td>
                </tr>

                <tr>
                    <td><label for="website">Website:</label></td>
                    <td><input type="text" id="website" name="website" <?php echo $website; ?>> <span style = "color:red"> <?php echo $websiteErr?> </span> </td>
                </tr>

                <tr>
                    <td><label for="comment">Comment:</label></td>
                    <td><textarea id="comment" name="comment" rows="5" cols="30"><?php echo $comment?></textarea></td>
                </tr>

                <tr>
                    <td><label for="gender">Gender:</label></td>
                    <td>
                        <input type="radio" id="female" name="gender" value="Female">
                        <label for="female">Female</label>

                        <input type="radio" id="male" name="gender" value="Male">
                        <label for="male">Male</label>
                        <?php echo $genderErr; ?>

                    </td>
                    <td><p style='color: red'>*</p></td>
                </tr>

                <tr>
                    <td><label for="profile_file">Upload File:</label></td>
                    <td><input type="file" id="profile_file" name="profile_file"> <span style="color:red"> <?php echo $fileErr?> </span></td>
                    <td><p style='color: red'>*</p></td>
                </tr>

                <tr>
                    <td><input type="submit" id="submit" name="submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>