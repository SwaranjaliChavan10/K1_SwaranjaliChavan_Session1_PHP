<!-- Create a complete PHP Job Application Form containing the following inputs:
Name (Text input)
Email (Email input)
Qualification (Dropdown select)
Gender (Radio buttons)
Skills (Checkboxes)
Experience (Dropdown select)
After the user submits the form, write the PHP logic to retrieve and cleanly display all the entered
details on the screen. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Name:
        <input type="text" name="name">
        <br>
        Email:
        <input type="text" name="email">
        <br>
        Qualification:
            <select name="qualification" id="">Qualification
                <option value="bsc">BSC</option>
                <option value="msc">MSC</option>
                <option value="be">BE</option>
            </select>
        <br>
        Gender:
        <input type="radio" name="gender" value="male" id="">Male
        <input type="radio" name="gender" value="female" id="">Female
        <input type="radio" name="gender" value="other" id="">Other
        <br>
        Skills:
        <input type="checkbox" name="skills" value="python" id="">Python
        <input type="checkbox" name="skills" value="java" id="">Java
        <input type="checkbox" name="skills" value="Javascript" id="">Javascript
        <br>
        Experience:
        <select name="exp" id="">
            <option value="1" name="exp">1</option>
            <option value="2" name="exp">2</option>
            <option value="3" name="exp">3</option>
        </select>
        <br>
        <button type="submit">Submit</button>
                            
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $qualification=$_POST["qualification"];
    $gender=$_POST["gender"];
    $skills=isset($_POST["skills"])? "Python":"Not have any skills";
    $experience=$_POST["exp"];

    echo "My name is $name, my email is $email, my qualification is $qualification, I had knowledge about $skills and I have experience of $experience years";
}

?>