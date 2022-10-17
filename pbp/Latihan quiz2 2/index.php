<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/b95e0793ff.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>QUIZ 2</title>
</head>
<body>
    
    <center>
    <br><br><br><br><br><br><br><br>
    
    <div class="card px-6 py-6 mt-6 column is-one-quarter ">
    <form action="" method="POST">
        <h1 class="title">Silahkan Login</h1>
        <div class="field">
            <p class="control has-icons-left">        
                <input class="input is-medium" type="text" name="nim" placeholder="Masukkan NIM">
                    <span class="icon is-medium is-left">
                        <i class="mdi mdi-24px mdi-account"></i>
                    </span>
            </p>
            <p class="control has-icons-left mt-4">
                <input class="input is-medium" type="password" name="pwd" placeholder="Masukkan Password">
                    <span class="icon is-medium is-left">
                        <i class="mdi mdi-key"></i>
                    </span>
            </p>
        <input class="button is-primary mt-5 px-6 " type="submit" value="MASUK">        
        </div>        
    </form>
    </div>
    </center>

</body>
</html>

<?php  
   if(isset($_POST['pwd'])){
    $user = $_POST['nim'];
    $pwd = $_POST['pwd'];
    if($user == "admin" && $pwd == "1"){
        session_start();
        $_SESSION['nama'] = $user;
        header("Location: menu.php");
       }
       else{
        header("Location: index.php");
       }
   }
?>  

