<?php
    session_start();

    $list = [
        [
            "kode" => "A001",
            "nama" => "Pemrograman Web"
        ],
        [
            "kode" => "A002",
            "nama" => "Pemrograman Service"
        ],
        [
            "kode" => "A003",
            "nama" => "Desain Interface"
        ],
        [
            "kode" => "A004",
            "nama" => "Manajemen Database"
        ]
        ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/b95e0793ff.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
    <title>Hasil</title>
</head>
<body>
<br><br><br><br><br><br>
    <center>
        <div class="column is-two-thirds mt-6 main">
            <form action="" method="post">
            <div class="columns ">
            <h1 class="column is-10 title has-text-left">Selamat datang, <?php echo $_SESSION["nama"]?></h1>
            <div class="column is-3 ">
                <button class="button is-danger px-4">
                    <a href="index.php" style="text-decoration:none; color:white;">Logout</a>
                </button>
            </div>
            </div>
            <p class="title is-5 has-text-left mb-1">Berikut adalah mata kuliah yang Anda pilih : </p>
                <table class="table is-hoverable is-fullwidth ">
                    <thead>
                        <tr class="is-selected">
                            <th>No.</th>
                            <th><abbr title="Kode Mata Kuliah">Kode</abbr></th>
                            <th><abbr title="Nama Mata Kuliah">Mata Kuliah</abbr></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            $num = 1;
                            foreach($_SESSION['pilihan'] as $hasil){
                            echo  '<tr>
                                  <th>'.$num.'</th>
                                  <td>'.$list[$hasil]["kode"].'</td>
                                  <td>'.$list[$hasil]["nama"].'</td>
                                  </tr>
                                  ';
                                // echo ''$list[$hasil]["kode"]."<br>";
                                // echo $list[$hasil]["nama"]."<br>";    
                            $num++;
                          }
                    ?>
                        
                    
                    </tbody>
                </table>

                <div class="is-flex">
                <input class=" button is-primary px-6"type="submit" value="SELESAI">
                </div>
                
                
            </form>
        </div>
        
    </center>

</body>
</html>

<?php
    // $list = [
    //     [
    //         "kode" => "A001",
    //         "nama" => "Pemrograman Web"
    //     ],
    //     [
    //         "kode" => "A002",
    //         "nama" => "Pemrograman Service"
    //     ],
    //     [
    //         "kode" => "A003",
    //         "nama" => "Desain Interface"
    //     ],
    //     [
    //         "kode" => "A004",
    //         "nama" => "Manajemen Database"
    //     ]
    //     ];


    // echo "BERHASIL<br>";
    // echo (int) $_SESSION['pilihan'][0]."<br>";
    // echo (int) $_SESSION['pilihan'][1]."<br>";
    // echo gettype((int)$_SESSION['pilihan'][0]);
    
    // echo $_SESSION['pilihan'][0];
    // echo $_SESSION['pilihan'][1];
    // echo $_SESSION['pilihan'];
    // // if(is_array($_SESSION['pilihan']) || is_object($_SESSION['pilihan'])){
    //   foreach($_SESSION['pilihan'] as $hasil){
        //   if(isset($_SESSION['pilihan'])){
            // echo $list[$hasil]["kode"]."<br>";
            // echo $list[$hasil]["nama"]."<br>";
        //   }
        
    //   }
    // }

    // echo '<center><div class="column is-two-thirds mt-6 ">
    //     <table class="table is-hoverable is-fullwidth">
    //     <thead>
    //         <tr class="is-selected">
    //             <th>No.</th>
    //             <th><abbr title="Kode Mata Kuliah">Kode</abbr></th>
    //             <th><abbr title="Nama Mata Kuliah">Mata Kuliah</abbr></th>"
    //         </tr>
    //     </thead>
    //     <tbody>


    //     </tbody>
    //     </table>
    //     </div>
    //     </center>';
?>