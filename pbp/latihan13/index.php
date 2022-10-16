<?php
    $no = 1;
    $buku =[
                [
                    "judul" => "kancil makan kfc",
                    "penerbit" => "oda",
                    "harga" => "40000"
                ],

                [
                    "judul" => "Belajar Membaca",
                    "penerbit" => "ngak",
                    "harga" => "10000"
                ],

                [
                    "judul" => "Belajar Menghitung",
                    "penerbit" => "nguk",
                    "harga" => "5000"
                ]
     ];

    #echo $buku["judul"], "<br>";
    #echo $buku["penerbit"],"<br>";
    #echo $buku["harga"],"<br>";
    ?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
	.clear {
		clear: both;
	}

	table {
	  border-collapse: collapse;
	  width: 50%;
	}

	th {
	  background-color: #4CAF50;
	  color: white;
	}

	th, td {
	  padding: 8px;
	  text-align: left;
	  border-bottom: 1px solid #ddd;
	}

	tr:hover {background-color:#f5f5f5;}

</style>    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array Asosiatif</title>
</head>
<body>
    <form action="" method="POST">
        <label for=""></label>
        <input type="search" name="search" id="" placeholder="Cari Data...">
        <input type="submit" value="CARI">
    </form>
    <br><br>
<table>    
<?php
    if(isset($_POST['search'])){
        $cari = $_POST['search'];
        foreach($buku as $data){
            if($data['judul'] == $cari){?>
            <tr>
            <th>No.</th>
            <th>Judul Buku</th>
            <th>Penerbit Buku</th>
            <th>Harga</th>
            </tr>
            <tr>
                <td><?php echo("1") ?></td>
                <td><?php echo $data["judul"]; ?></td>
                <td><?php echo $data["penerbit"]; ?></td>
                <td><?php echo "Rp. ".$data["harga"]; ?></td>
            </tr>
            </table>
           <?php  }
        }
    }
    else{?>
    <table>
         <tr>
            <th>No.</th>
            <th>Judul Buku</th>
            <th>Penerbit Buku</th>
            <th>Harga</th>
            </tr>
            <?php
            foreach($buku as $atribut) {?>
                <tr>
                <td><?php echo "1" ?></td>
                <td><?php echo $atribut["judul"]; ?></td>
                <td><?php echo $atribut["penerbit"]; ?></td>
                <td><?php echo "Rp. ".$atribut["harga"]; ?></td>
            </tr>
            <?php } ?>
    <?php } ?>


   
      
  
    </table>


</body>
</html>







    <?php 
    #foreach ($buku as $atribut){
    #    echo "judul buku = ".$atribut["judul"],"<br>";
    #    echo "penerbit buku = ".$atribut["penerbit"],"<br>";
    #    echo "harga buku = ".$atribut["harga"],"<br><br>";
    #}

    #foreach ($buku as $entitas => $atribut){
    #    echo $entitas, " buku = ", $atribut["judul"],"<br>";
    #    echo $entitas, " buku = ", $atribut["penerbit"],"<br>";
    #    echo $entitas, " buku = ", $atribut["harga"],"<br>";
    #}
    #https://www.ketutrare.com/2019/02/pemrograman-php-array-asosiatif-di-php-dan-contoh-kasus.html
    ?>


