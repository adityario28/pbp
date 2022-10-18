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
                <input class="button is-danger px-4" type="submit" value="Logout" name="logout">
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
                
                <div class="is-flex columns">
                <input class="column button is-2 is-primary  has-text-weight-semibold ml-3 is-size-5" type="submit" name="submit" value="SUBMIT">
                <input class="column button is-2 is-warning ml-5 has-text-weight-semibold is-size-5 has-text-danger" type="submit" name="clear" value="CLEAR">
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
if(isset($_POST['logout'])){
    session_destroy();
    header("Location: index.php");
    
}
if(isset($_POST['clear'])){
    unset($_SESSION['pilihan']);
    header("Location: menu.php");
}
?>
