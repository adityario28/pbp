<?php  
    $bil = $_POST["bil"];
    for($i=0;$i<=$bil;$i++){  
        for($j=1;$j<=$i;$j++){  
        echo "* ";  
    }  
echo "<br>";  
}  
?>  