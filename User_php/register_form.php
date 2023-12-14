<?php

@include 'confiq.php';

if(isset($_POST['submit'])){

    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $role = $_POST['role'];

    $select = "SELECT * FROM hms_users WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exist!';
        
    }else{

        if($pass != $cpass){
            $error[] = 'password not matched!';
        }else{
            $insert = "INSERT INTO hms_users(first_name, last_name, email, password, role) VALUES('$name','','$email','$pass','$role')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compactible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>

    <!--custom css file link-->
    <link rel="stylesheet" href="style2.css">

</head>
<body>

<div class="form-container">

    <form action="" method="post">
        <h3>register now</h3>
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="text" name="first_name" required placeholder="enter your first name">
        <input type="text" name="last_name" required placeholder="enter your last name">
        <input type="email" name="email" required placeholder="enter your email">
        <input type="password" name="password" required placeholder="enter your password">
        <input type="password" name="cpassword" required placeholder="confirm your password">
        <select name="role">
            <option value="user">user</option>
            
        </select>
        <input type="submit" name="submit" value="register now" class="form-btn">
        <p>already have an account? <a href="login_form.php">login now</a></p>
    </form>

</div>
    
</body>
</html>