<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post" action="">
    Masukkan :
    <input type="number" name="bil" id="">
    <input type="submit" value="SUBMIT">
</form>
<?php
 if (isset($_POST["bil"])){
    $bil = $_POST["bil"];
    if($bil%2==0){
        echo("Bilangan genap");
    }
    else{
        echo("Bilangan ganjil");
    }
 }
?>
</body>
</html>