<?php           //Arithmetic
    $a = 4;
    $b = 6;
    const ab = 75;

    // echo "The sum of " .$a. " and " .$b. " is " .$a + $b ;
    // echo "<br>";

    // echo $a ** $b;  //a^b
    // echo "<br>";

    //echo $a + ab; 
?>

<?php           //assignment
//we can include multiple PHP scripts
$a = 4;
$b = 6;

//echo $a = $a * $b;
$b += $a;
//echo $b;

//echo $a **= $b;

?>

<?php
$a = 6;
$b = 20;
$c = "20";

var_dump($a == $b);
echo "<br>";

echo var_dump($c === $b);            //identical

var_dump($a <=> $b);                //spaceship operator returns integer  


?>

<?php               //string Operator
$name="saua";
echo "my name is $name and $name";
        //or
echo '</br> my name is'. $name. 'and'.$name;   //'.' dot operator or concat operator
?>