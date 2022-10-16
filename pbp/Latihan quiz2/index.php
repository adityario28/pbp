<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>QUIZ 2</title>
</head>
<body>
    <div class=" px-5 card kartu" style="max-width:480px">
        <div class="card-body">
            <form action="halaman2.php" method="POST" style="max-width:360px;margin:auto;">
                <h2 class="judul text-center">Silahkan Login</h2>
                <label for="nim" class="sr-only text-left">Username</label>
                <input type="text" name="nim" id="" placeholder="Masukkan NIM" required autofocus class="form-control mt-0 pe-5">
                <br>
                <label for="pwd" class="sr-only">Password</label>
                <!-- <input type="" name="pwd" id="" placeholder="Masukkan NIM"> -->
                <input type="password" name="pwd" placeholder="Masukkan Password" class="form-control mt-0 pe-5">
                <br>
                <input class="btn btn-lg btn-primary masuk " type="submit" value="MASUK">
            </form>
        </div>
    </div>
    <br><br>
</body>
</html>
