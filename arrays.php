<?php                       //indexed loop
    //$users = array("abc","def","ghi","jkl");
    $users = ["abc","def","ghi","jkl"];

    //echo $users[1];                             //value at index 1

    for($i=0; $i < 4; $i++ ){
        //echo "<h1>".$users[$i]."</h1>";
        echo "element ". $users[$i];
        echo "<br>";
    }
?> 

<?php               //for-each loop

//used in looping of array, it's automatically count the elements, we need to initialize or increment to print the elements
    $users = ["abc","def",154,"jkl"];

    foreach($users as $x){
        echo $x;
        echo "<br>";

        if ($x == "def") {
            continue;
        }
    }

?>

<?php               //associative array: key-value pair

                    //if elements are of different categories name,age,city,etc. while indexed array when each elements are of same category
    $details = ["name" => "saurav", "age" => 22, "city" => "jaipur"];

    echo $details["name"];
    echo "<br>"; 
    echo $details["age"];
    echo "<br>";

    foreach($details as $abc){
        echo $abc;
        echo "<br>";
    }

    //print  keys and val together
    foreach($details as $key => $abc){
        echo "Key is $key and value is $abc <br>" ;
        echo "<br>";
    }
?>


<?php                   //multi-dimensional Array

    $users = [
        ["abc",'noida','india'],
        ['qwe','delhi','india'],
        ['zxc','jaipur','india']
    ];

    print_r($users);    //Array ( [0] => Array ( [0] => abc [1] => noida [2] => india ) [1] => Array ( [0] => qwe [1] => delhi [2] => india ) [2] => Array ( [0] => zxc [1] => jaipur [2] => india ) ) 
    echo count($users);             //count no.of arrays inside

    for($i = 0; $i < count($users); $i++){
        for ($j=0; $j < count($users[$i]); $j++) { 
            echo $users[$i][$j];
            echo '<br>';
        }
    }
?>


<?php           

//to display multidimensional data in table form
$users = [
    [1,"abc",'noida','india'],
    [2,'qwe','delhi','india'],
    [3,'zxc','jaipur','india'],
    [4,'poi','Blr','india']
];

echo "<table border = 1>";

for($i = 0; $i < count($users); $i++){
    echo "<tr>";
    for ($j=0; $j < count($users[$i]); $j++) { 
        echo "<td>";
        echo $users[$i][$j];
        echo '</td>';
    }
}
echo "</table>";
?>

<?php

    $students = [
        ["name" => "abc", "age" => 53, "city" => "avb"],
        ["name" => "abc", "age" => 53, "city" => "avb"],
        ["name" => "abc", "age" => 53, "city" => "avb"],
        ["name" => "abc", "age" => 53, "city" => "avb"]
    ];

    foreach($students as $val){
        print_r($val);
        echo "<br>";
    }

    echo "<table border = 2>";
        
    foreach($students as $data){

        echo "<tr>";
        foreach($data  as $key => $input){
            echo "<td>";
            echo "$key is $input";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>

<?php
    $values = ["abc","def","ghi","jkl"];

    array_push($values, "hyg","jgvhv","redf");
    
    print_r($values);
    echo "</br>";

    array_pop($values);             //can remove only one element from end
    array_slice($users,-2);         //remove 2 elements from end

?>