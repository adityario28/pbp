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
            <h1 class="column is-10 title has-text-left">Selamat Datang, <?php echo $_SESSION["nama"]?></h1>
            <div class="column is-3 ">
                <button class="button is-danger px-4">
                    <a href="index.php" style="text-decoration:none; color:white;">Logout</a>
                </button>
            </div>
            </div>
            <p class="title is-5 has-text-left mb-1">Silahkan pilih mata kuliah : </p>
                <table class="table is-hoverable is-fullwidth ">
                    <thead>
                        <tr class="is-selected">
                            <th ">No.</th>
                            <th><abbr title="Kode Mata Kuliah">Kode</abbr></th>
                            <th><abbr title="Nama Mata Kuliah">Mata Kuliah</abbr></th>
                            <th><abbr title="Pilih Mata Kuliah">Pilih</abbr></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>A001</td>
                            <td>Pemrograman Web</td>
                            <td><input type="checkbox" name="cek[]" value="0" id=""></td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>A002</td>
                            <td>Pemrograman Service</td>
                            <td><input type="checkbox" name="cek[]" value="1" id=""></td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>A003</td>
                            <td>Desain Interface</td>
                            <td><input type="checkbox" name="cek[]" value="2" id=""></td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>A004</td>
                            <td>Manajemen Database</td>
                            <td><input type="checkbox" name="cek[]" value="3" id=""></td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="is-flex">
                <input class=" button is-primary px-6"type="submit" name="submit" value="SUBMIT">
                </div>
                
                
            </form>
        </div>
    </center>
</body>
</html>


<?php
if(isset($_POST['cek'])){
    $_SESSION['pilihan'] = $_POST['cek'];
    header("Location: tes.php");
}
?>
