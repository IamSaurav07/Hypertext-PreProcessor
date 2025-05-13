<?php

    function inner(){
        echo "<h1> Inner Func</h1>";
    }

    function display(){
        inner();
        echo "<br>";
        echo "Function called";
        echo "<br>";
    }

    display();

    display();


    function sum($a, $b){
        echo $a + $b;
        echo "<br>";
    }

    sum(4,6);

    function active($name, $color){
        echo "<h1 style ='color:$color'> $name </h1>";

    }

    active("Manipal", "Orange");
    active("Manipal", "yellow");
    active("Manipal", "Orange");

?>
<?php
    function ret(){
        return "Manipal";
    }

    echo ret(). " is great college <br>";
    echo "<h1 style = 'color: green'>".ret(). " Unversity Jaipur</h1>"
?> 

<?php                   //default parameter
    function one($name, $color="green"){
        echo "<h1 style = 'color:$color'>".$name."<h1><br>";
    }

    one("anil","blue")
?>

<?php                   //nested function
    //out();            ok
    function out(){
        echo "Outter function<br>";

        //in();         not ok
        function in(){
            echo "inner function also called";
        }
        //in();         ok
    }

    out();
    in();
?>

<?php               //variable function

    function vari(){
        echo "Variable function called <br>";
    }

    $abc = "vari";                  //function will be stored as string in variable
    $abc();                         //vaiable valled 
?>

<?php               //call-back function
    function sun(){
       echo "function called";
    }

    $moon = "sun";

    function planet($abc){
        $abc();
    }

    planet($moon);
 

?>

