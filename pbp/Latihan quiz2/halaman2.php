<?php  
   $user = $_POST['nim'];
   $pwd = $_POST['pwd'];

   if($user == "admin" && $pwd == "1"){
    session_start();
    $_SESSION['nama'] = $user;
    $_SESSION['pass'] = $pwd;
    header("Location: rmk.php");
   }
   else{
    header("Location: index.php");
   }
   
?>  