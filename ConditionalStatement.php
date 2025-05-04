<?php
    $age = 45;

    if ($age < 18) {
        echo "Person is under aged<br>";
    }
    else{
        echo "<h1>Person is elgible</h1> ";     //h1 automatically adds a break statement
    }

    if ($age == 45) {
        echo 'age is ', 45 , '<br>';
    }

    $name = "Saunya";

    if ($name == "abc") {
        echo "the name is $name";
    }
    else if ($name == "Saunya") {
        echo 'name is '.$name."<br>";
    }
    else{
        echo "person doesn't exixt in database";
    }
?>