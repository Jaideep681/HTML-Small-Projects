<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
    <style>
        fieldset{
            width: max-content; 
            margin-left: 525px;
        }
        form{ 
            text-align: justify;
        }
        #reg, #log{
            margin-left: 95px;
        }
        .welcome{
            text-align: center;
        }
        .regis form{
            margin-left: -200px;
        }
        .logis form{
            margin-left: 250px;
            margin-top: -315px;
        }
        #registration{ 
            pointer-events: none;
            margin-left: 335px;
        }
        #login{
            pointer-events: none;
            float: right;
            margin-right: 350px;
        }
    </style>
</head>
<body>
    <div class="welcome">
    <h1>Welcome to my Website</h1>
    <p>New User?</p>
    <button><a href="#registration" id="rega">New Registration</a></button>
    <p>Login to access the website</p>
    <button><a href="#login" id="loga">Login</a></button>
    </div>
    <div class="regis">
    <h1 id="registration">Registration Form</h1>
    <form action="Form Validation.php" method="POST">
        <fieldset><br>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="Enter your name" required/><br><br>
            <label for="name">Age: </label>
            <input type="number" name="age" placeholder="Enter your age" required/><br><br>
            <label for="course">Course: </label>
            <input type="text" name="course" placeholder="Enter your course" required/><br><br>
            <label for="email">E-mail ID: </label>
            <input type="mail" name="email" placeholder="Enter your email" required/><br><br>
            <label for="password">Password: </label>
            <input type="password" name="password" placeholder="Enter your password" required/><br><br>
            <button value="reg_submit" name="reg" id="reg">Register</button><br>
        </fieldset>
    </form>
    </div>
    <div class="logis">
    <h1 id="login">Login Form</h1>
    <form action="Form Validation.php" method="POST">
        <fieldset><br>
        <label for="name">Name: </label>
            <input type="text" name="name" placeholder="Enter your name" required/><br><br>
            <label for="name">Age: </label>
            <input type="number" name="age" placeholder="Enter your age" required/><br><br>
            <label for="email">E-mail ID: </label>
            <input type="mail" name="email" placeholder="Enter your email" required/><br><br>
            <label for="password">Password: </label>
            <input type="password" name="password" placeholder="Enter your password" required/><br><br>
            <button value="log_submit" name="log" id="log">Login</button><br>
        </fieldset>
    </form>
    </div><br>
    <br>
    <br>
    <br>
</body>
</html>
<?php
    $conn=mysqli_connect('localhost','root','','form');
    if(isset($_POST['reg'])){
        $name1=$_POST['name'];
        $age1=$_POST['age'];
        $course1=$_POST['course'];
        $email1=$_POST['email'];
        $password1=password_hash($_POST['password'],PASSWORD_DEFAULT);
        $reg_query="INSERT INTO form.form_validation(Name,Age,Course,Email,Password)VALUES('$name1','$age1','$course1','$email1','$password1')";
        $reg_execute=mysqli_query($conn,$reg_query);
        if($reg_execute){
            echo "Registration successful";
        }
        else{
            echo "Registration failed";
        }
    }
    if(isset($_POST['log'])){
        $name2=$_POST['name'];
        $age2=$_POST['age'];
        $email2=$_POST['email'];
        $password2=$_POST['password'];
        $log_query="Select * from form.form_validation where Email='$email2'";
        $log_execute=mysqli_query($conn,$log_query);
        if(mysqli_num_rows($log_execute)==1){
            $row=mysqli_fetch_assoc($log_execute);
            if(password_verify($password2,$row['Password'])){
                echo "Login Successful";
            }
            else{
                echo "Incorrect password";
            }
        }
        else{
            echo "User not found!! Please fill the form correctly...";
        }
    }
?>