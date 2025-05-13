<?php

    $name = "abc";

    function getName(){
        $name = "qwe";
        echo $name;

        function inner(){
            $name1 = "zxc";
            echo $name1;
        }
    }

    echo $name;
    echo "<br>";

    getName();
    inner();
?>