<?php
    session_start();
    echo "BERHASIL<br>";
    echo gettype($_SESSION['pilihan'][0]);
    // echo $_SESSION['pilihan'][0];
    // echo $_SESSION['pilihan'][1];
    // echo $_SESSION['pilihan'];
    // // if(is_array($_SESSION['pilihan']) || is_object($_SESSION['pilihan'])){
    //  foreach($_SESSION['pilihan'] as $hasil){
    //      echo $hasil;
    //  }
    // }

    // echo '<center><div class="column is-two-thirds mt-6 ">
    //     <table class="table is-hoverable is-fullwidth">
    //     <thead>
    //         <tr class="is-selected">
    //             <th>No.</th>
    //             <th><abbr title="Kode Mata Kuliah">Kode</abbr></th>
    //             <th><abbr title="Nama Mata Kuliah">Mata Kuliah</abbr></th>"
    //         </tr>
    //     </thead>
    //     <tbody>


    //     </tbody>
    //     </table>
    //     </div>
    //     </center>';
?>