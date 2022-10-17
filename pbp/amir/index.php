<html>
<head>
    <title>Tutorial Menampilkan Multiple Checkbox Dengan Foreach Di PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Form Input Data Multiple Checkbox HTML</h2>
    <form method="POST">
        <input type="checkbox" name="checkbox_list[]" alt="checkbox" value="Melon" /> Melon
        <input type="checkbox" name="checkbox_list[]" alt="checkbox" value="Jeruk" /> Jeruk
        <input type="checkbox" name="checkbox_list[]" alt="checkbox" value="Anggur" /> Anggur
        <input type="checkbox" name="checkbox_list[]" alt="checkbox" value="Apel" /> Apel
        <input type="submit" name="tampil" value="Submit"/>
    </form>
    <?php
        if(isset($_POST['tampil'])){
            if(empty($_POST['checkbox_list'])){
                echo"Pilih dong buahnya ...";
            }
            else{
                echo "Anda memilih;<br/><br/>"; 
                foreach($_POST['checkbox_list'] as $item){  
                    echo $item ."<br/>";
                }
            }
        }
    ?>
</body>
</html>