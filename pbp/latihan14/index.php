<?php
    $no = 1;
    $data =[
                [
                    "nim" => "001",
                    "nama" => "Laboran",
                    "ipk" => "3.9"
                ],
                [
                    "nim" => "002",
                    "nama" => "Cahyo",
                    "ipk" => "3.8"
                ],
                [
                    "nim" => "003",
                    "nama" => "Andrew",
                    "ipk" => "3.7"
                ],
                [
                    "nim" => "004",
                    "nama" => "Dimas",
                    "ipk" => "3.6"
                ],
                [
                    "nim" => "005",
                    "nama" => "Rachel",
                    "ipk" => "3.7"
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

    body{
        font-family: Arial, sans-serif;
    }

	table {
	  border-collapse: collapse;
	  width: 50%;
	}

	th {
	  /* background-color: #4CAF50; */
      /* background-color: #348ce3; */
      background-color: #edaa18;
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
        <label for="search">Filter NIM</label>
        <input type="search" name="search" id="" placeholder="Masukkan NIM (ex:001)">
        <input type="submit" value="CARI">
    </form>
    <br><br>
    <table>
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>IPK</th>
        </tr>
        <?php 
        
        #echo $cari;
        if(isset($_POST['search'])){
            $cari = $_POST['search'];
            foreach($data as $atr){
                if($atr['nim'] === $cari){ ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $atr["nim"]; ?></td>
                        <td><?php echo $atr["nama"]; ?></td>
                        <td><?php echo $atr["ipk"]; ?></td>                        
                    </tr>
                <?php $no++;
                }
                
            }
            }
        
        else{
            #echo "Hasil Tidak Ditemukan <br>"; ?>
        <?php foreach($data as $awal){?>
            <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $awal["nim"]; ?></td>
            <td><?php echo $awal["nama"]; ?></td>
            <td><?php echo $awal["ipk"]; ?></td>
            </tr>
        <?php $no++; }}?>
        
    </table>


</body>
</html>