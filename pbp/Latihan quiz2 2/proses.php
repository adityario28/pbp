<?php
    session_start();

    foreach(['cek1', 'cek2', 'cek3', 'cek4'] as $matkul){
        $_SESSION[$matkul] = (isset($_POST[$matkul])) ? $_POST[$matkul] : "";
    
    }

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>\n";

    // echo "Method Array Session Berhasil";
    // $i = 0;
    // foreach($_POST['cek'] as $cek){
    //     $_SESSION[$i] = $cek;
    //     $i++;
    // }

    // foreach($_SESSION['cek'] as $key => $value){
    //     echo '<input type="checkbox" name="list['$key']" value="'.$value.'" checked="checked >';
    // }
    //echo '<br><a href ="tes.php">tes</a>';
    // $cek = $_POST['cek'];
    // if(isset($cek)){
    //     echo "BERHASIL MENDAPATKAN INPUT";
    // }
    // else{
    //     echo "Input Salah";
    // }
    
?>