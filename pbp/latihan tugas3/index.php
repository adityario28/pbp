<?php
    $buku =[
                [
                    "judul" => "kancil makan kfc",
                    "penerbit" => "oda",
                    "harga" => "40000"
                ],

                [
                    "judul" => "Belajar Membaca",
                    "penerbit" => "ngak",
                    "harga" => "10000"
                ],

                [
                    "judul" => "Belajar Menghitung",
                    "penerbit" => "nguk",
                    "harga" => "5000"
                ]
     ];

    #echo $buku["judul"], "<br>";
    #echo $buku["penerbit"],"<br>";
    #echo $buku["harga"],"<br>";

    foreach ($buku as $atribut){
        echo "judul buku = ".$atribut["judul"],"<br>";
        echo "penerbit buku = ".$atribut["penerbit"],"<br>";
        echo "harga buku = ".$atribut["harga"],"<br><br>";
    }

    #foreach ($buku as $entitas => $atribut){
    #    echo $entitas, " buku = ", $atribut["judul"],"<br>";
    #    echo $entitas, " buku = ", $atribut["penerbit"],"<br>";
    #    echo $entitas, " buku = ", $atribut["harga"],"<br>";
    #}
    
?>

https://www.ketutrare.com/2019/02/pemrograman-php-array-asosiatif-di-php-dan-contoh-kasus.html