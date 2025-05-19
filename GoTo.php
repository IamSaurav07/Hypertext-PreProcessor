<?php
/*
$a = 6;
if($a == 6){
    goto jump;
}

echo "These statements will be skipped ";

jump:
echo "Goto statment executed"
*/
?>

<?php


    for($i = 1; $i <10; $i++){
        echo "$i </br>";
        if($i == 5){
            goto jump;
        }
        
    }


    jump:
    echo "jumped to this state";
?>