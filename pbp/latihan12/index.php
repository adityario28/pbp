<?php
    $matriks = [
                ["sate", "bakso", "soto"],
                ["mangga", "apel", "jeruk"],
                ["singa", "babi", "badak"]
    ];
    
    #echo $matriks[0][0],"<br>";
    #echo $matriks[1][1],"<br>";
    #echo $matriks[2][1],"<br>";
    
    #for($i=0; $i<3; $i++){
    #    echo $matriks[$i][1], "&nbsp";
    #}
    
    foreach ($matriks as $index){
        foreach($index as $n){
            echo $n,"<br>";
        }
    }

    
?>