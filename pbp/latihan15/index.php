<!DOCTYPE html>
<html lang="en">
<style>
    body{
        font-family: Arial, sans-serif;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <form action="halaman2.php" method="POST">
        <label for="nim">Username:</label>
        <input type="text" name="nim" id="" placeholder="Masukkan NIM">
        <br><br>
        <label for="pwd">Password:</label>
        <!-- <input type="" name="pwd" id="" placeholder="Masukkan NIM"> -->
        <input type="password" name="pwd" placeholder="Masukkan Password">
        <br><br>
        <input type="submit" value="MASUK">
    </form>
    <br><br>
</body>
</html>