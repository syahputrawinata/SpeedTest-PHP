<?php
    hitunglembar(140500);

    function hitunglembar($uang){
        $lembar = [100000, 20000, 500, 100];

        echo "uang: Rp. " . number_format($uang, 0, ',','.');
        echo "<br>";
        echo "Lembar Rupiah : ";
        echo "<br>";

        foreach($lembar as $nilai) {
            $jumlah = floor($uang / $nilai);
            if($jumlah > 0 ) {
                echo "- Rp. " . number_format($nilai, 0, ',', '.') . " : $jumlah";
                echo "<br>";
            }
            $uang %= $nilai;
        }
    }
?>