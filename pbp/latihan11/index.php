<?php
    $makan1 = "sate";
    $makan2 = "bakso";
    $makan3 = "soto";

    $kenyang = ["sate", "bakso", "soto"];
    #$kenyang = array("sate", "bakso", "soto");

    //echo "$kenyang[0]<br>";
    //echo $kenyang[1], "<br>";
    //echo $kenyang[2], "<br>";
    
    //for ($i = 0; $i < count($kenyang); $i++){
    //    echo $kenyang[$i], "<br>";
    //}

    foreach ($kenyang as $makanan){
        echo "$makanan <br>";
    }
    
?>