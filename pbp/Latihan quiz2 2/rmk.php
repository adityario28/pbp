<?php
    session_start();
    echo "<h1>SELAMAT DATANG, ".$_SESSION["nama"];
    echo "<br><a href='index.php'>Logout</a>";
?>