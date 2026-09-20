<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        Employee Name:
        <input type="text" name="name">
        <br>
        Email:
        <input type="text" name="email">
        <br>
        Phone NO. 
        <input type="number" name="phone">
        <br>
        Department:
        <input type="text" name="dept">
        <br>
        Salary:
        <input type="number" name="salary">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $dept=$_POST["dept"];
    $salary=$_POST["salary"];

    $sql = $conn-> prepare("insert into employees values(?,?,?,?,?)");
    $sql->bind_param("ssisd", $name,$email, $phone, $dept, $salary);

    if ($sql->execute()) {
        echo "inserted successfully";
    }
    else{
        echo "not inserted";
    }

}
?>