<?php
    include ("./file_name.php");            //will load all the content of that file
   
    
//include : can load one file multiple time
//include_once:if same file is already loaded it will execute again
                // used inside a loop but it to run only once,
//require : if there error like in file name it gives error, which can't be hidden in production  while other gives warning
    for($i = 0; $i < 10; $i++){
        include_once ("./file_name.php");         //run only one time
    }



?>