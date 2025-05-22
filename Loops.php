<?php                   //for
    for($i = 1; $i <= 10; $i++){
        // echo "$i no. line<br>";
    }

    //echo "Table of 5: <br>";
    $num = 5;
    for($i = 1; $i <= 10; $i++){
        // echo "$i * $num is ";
        // echo $i * $num . "<br>";
    }
?>

<?php                   //break
    $num = 5;

    for ($i = 1; $i <= 10; $i++) {
        // echo $i;
        // echo "<br>";
        
        if ($num == $i) {
            break;
        }

        
    }
    // echo "<br>";
    // echo "<br>";
?>

<?php       //continue
    $num = 5;

    for ($i=1; $i <= 10; $i++) { 
        if ($num == $i || $i == 3) {
            continue;
        }

        // echo $i;
        // echo "<br>";
    }
?>

<?php           //nested loop
    for ($i=0; $i < 5; $i++) { 
        for ($j=0; $j <= 3; $j++) { 
            echo "$i $j <br> ";
        }
    }
?>

<?php               //while loop
    $num = 0;
    while($num <=5){
        // echo $num;
        echo "<br>"; 
        $num++;
    }
?>

<?php               //do-while loop

    $num = 10;
    do {
        echo $num;
        echo "<br>";
        $num --;
    } while ($num > 0);
    //first loop will run no matter what  
?>



