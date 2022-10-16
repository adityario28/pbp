<?php
    $Bilangan1 = $_POST["bil1"];
    $Bilangan2 = $_POST["bil2"];

    $hasil_jml = $Bilangan1 + $Bilangan2;
    $hasil_kurang = $Bilangan1 - $Bilangan2;
    $hasil_kali = $Bilangan1 * $Bilangan2;
    $hasil_bagi = $Bilangan1 / $Bilangan2;

    echo("Hasil penjumlahan = ".$hasil_jml);
    echo nl2br("\nHasil pengurangan = ".$hasil_kurang);
    echo nl2br("\nHasil perkalian = ".$hasil_kali);
    echo nl2br("\nHasil pembagian = ".$hasil_bagi);
?>