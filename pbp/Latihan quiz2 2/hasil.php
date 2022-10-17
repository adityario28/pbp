<?php
session_start();
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
    <title>Menu</title>
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
                            <th ">No.</th>
                            <th><abbr title="Kode Mata Kuliah">Kode</abbr></th>
                            <th><abbr title="Nama Mata Kuliah">Mata Kuliah</abbr></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $num = 1;
                        foreach(['cek1', 'cek2', 'cek3', 'cek4'] as $pilihan){
                            $_SESSION[$pilihan[$num]] = (isset($_POST[$pilihan])) ? $_POST[$pilihan] : "";
                            echo $_SESSION[$pilihan[$num]];
                            // if(isset($_SESSION[$pilihan[]])){
                            //      echo '<tr>
                            //      <th>1</th>
                            //      <td>A001<td>
                            //      <td>Pemrograman Web<td>
                            //      </tr>';
                            // }
                            // }
                            // if(isset($_SESSION[$pilihan][1])){
                            //     echo '<tr>
                            //     <th>2</th>
                            //     <td>A002<td>
                            //     <td>Pemrograman Service<td>
                            //     </tr>';
                            // }
                            // if(isset($_SESSION[$pilihan][2])){
                            //     echo '<tr>
                            //     <th>3</th>
                            //     <td>A003<td>
                            //     <td>Desain Interface<td>
                            //     </tr>';
                            // }
                            // if(isset($_SESSION[$pilihan][3])){
                            //     echo '<tr>
                            //     <th>4</th>
                            //     <td>A004<td>
                            //     <td>Manajemen Database<td>
                            //     </tr>';
                            // }
                            
                            $num++;
                        }

                        echo "<pre>";
                        print_r($_SESSION);
                        echo "</pre>";
                    ?>
                        
                    
                    </tbody>
                </table>
                
                <div class="is-flex">
                <input class=" button is-primary px-6"type="submit" value="SUBMIT">
                </div>
                
                
            </form>
        </div>
        
    </center>
</body>
</html>

<?php
        
        $num = 1;
        echo '<center><div class="column is-two-thirds mt-6 ">
        <table class="table is-hoverable is-fullwidth">
        <thead>
            <tr class="is-selected">
                <th>No.</th>
                <th><abbr title="Kode Mata Kuliah">Kode</abbr></th>
                <th><abbr title="Nama Mata Kuliah">Mata Kuliah</abbr></th>"
            </tr>
        </thead>
        <tbody>


        </tbody>
        </table>
        </div>
        </center>';
        foreach(['cek1', 'cek2', 'cek3', 'cek4'] as $matkul){
            $_SESSION[$matkul] = (isset($_POST[$matkul])) ? $_POST[$matkul] : "";
        
        }
    
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
?>

