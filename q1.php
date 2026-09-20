<!-- Write a PHP script that uses a foreach loop to iterate through an associative array containing 5
different fruits as keys and their corresponding colors as values. Display the output in a clear,
readable format. -->

<?php
$fruits=array(
    "Orange"=>"Orange",
    "Mango"=>"Yellow",
    "banana"=>"Yellow",
    "Apple"=>"Red",
    "Gauva"=>"Green"
);
foreach ($fruits as $fruit => $color) {
    echo "$fruit: $color ";
     }


?>