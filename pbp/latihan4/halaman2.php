<?php
    $bilangan1 = $_POST["bil1"];
    for($i = 0;$i<=$bilangan1;$i++){
        if($i%2 == 0){
            echo nl2br($i." merupakan bilangan genap\n");
        }
        else{
            echo nl2br($i." merupakan bilangan ganjil\n");
        }
    }
?>