<?php
    $nama1 = "Syahputra Winata";
    $nama2 = "Satriya Alham";
    comparename($nama1, $nama2);

    function comparename($nama1, $nama2) {
        $panjangnama1 = strlen($nama1);
        $panjangnama2 = strlen($nama2);

        if($panjangnama1 > $panjangnama2) {
            $selisih = $panjangnama1 - $panjangnama2;
            echo "$nama1 Memiliki karakter lebih banyak dari $nama2: selisih $selisih karakter";  
        }else if($panjangnama2 > $panjangnama1) {
            $selisih = $panjangnama2 - $panjangnama1;
            echo "$nama2 Memiliki karakter lebih banyak dari $nama1: selisih $selisih karakter";
        }else {
            echo "Kedua nama memiliki jumlah karakter yang sama";
        }
    }

?>