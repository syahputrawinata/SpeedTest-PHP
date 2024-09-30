<?php
    $data = [80, 90, 75, 100, 85, 100, 66];
    $cari = 100;
    hitungangka($data, $cari);

    function hitungangka($data, $angkadicari) {
        $jumlahangka = array_count_values($data);

        if(array_key_exists($angkadicari, $jumlahangka)) {
            echo "Jumlah Angka $angkadicari = " . $jumlahangka[$angkadicari]; 
        }else {
            echo "Angka $angkadicari = Tidak Ditemukan Dalam Data.";
        }
    }
?>  