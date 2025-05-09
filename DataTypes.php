<?php
    $abc = "def";
    echo $abc;
    echo "<br>";

    echo var_dump($abc); 
    echo "<br>";                    //string(3) "def"

    $num = 1242;
    echo var_dump($num);            //int(1242)
    echo "<br>";

    $bool = true;
    echo var_dump($bool);            //bool(true)
    echo "<br>";

    $float = 45754.73;
    echo var_dump($float);            //float(45754.73)
    echo "<br>";

    $array = [34,876.67,"ghdf"];
    echo var_dump($array);            //array(3) { [0]=> int(34) [1]=> float(876.67) [2]=> string(4) "ghdf" }float(45754.73)
    echo "<br>";

    $empty = null;
    echo var_dump($empty);            //NULL
    echo "<br>";