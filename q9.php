<!-- Create a PHP-based registration form for adding employees to the system. The form should
include the following fields:
Full Name (text input), Email (text input), Password (password input), Confirm Password -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""  method="POST">
        Name:
        <input type="text" name="name" id="">
        <br>
        Email:
        <input type="text" name="email" id="">
        <br>
        Password:
        <input type="password" name="pass" id="">
        <br>
        Confirm Password:
        <input type="password" name="cpass" id="">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["pass"];
    $confirm_password=$_POST["cpass"];
    if (empty($name)) {
        echo "<script> alert('Field is Compulsory'); </script>";
    }
    if ($password!=$confirm_password) {
        echo "<script> alert('Password does not match'); </script>";
    }
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        echo "<script> alert('Email format does not match'); </script>";
    }
}
?>