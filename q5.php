<!-- Create an HTML form with the following fields: a text input for the user's Name, a number input
for Age, a dropdown select for Gender (Male, Female, Other), and a submit button.
Use the POST method to send the form data to a PHP script.
In the PHP script, process the form data and display the exact message:
Output: Hello, [Name]. You are [Age] years old and identify as [Gender]. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Username:
    <input type="text" name="name">
    <br>
    Age:
    <input type="number" name="age">
    <br>
    Gender:
    <select name="gender" id="">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
    <br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $username = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    
    echo "Hello, $username. You are $age years old and identify as $gender.";
}

?>