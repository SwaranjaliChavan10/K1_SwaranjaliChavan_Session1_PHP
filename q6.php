<!-- Create an HTML form with the following fields: a text input for Email, a password input for
Password, a checkbox for subscribing to a newsletter, and a submit button.
Use the GET method to send the form data to a PHP script.
In the PHP script, process the form data and conditionally display a message based on
whether the user checked the subscription box.
Output Example: Thank you for signing up, [Email]. You have [subscribed /
not subscribed] to the newsletter. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        Email:
        <input type="text" name="email">
        <br>
        Password:
        <input type="text" name="pass">
        <br>
        Are you Subscribe?
        <input type="checkbox" name="subscribe" value="yes" >
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"]==="GET") {
$email = $_GET["email"];
$subscribe = isset($_GET["subscribe"])?"Subscribe":"Not Subscribe";


echo "Thank you for signing up, $email. You have $subscribe to the newsletter.";

}

?>