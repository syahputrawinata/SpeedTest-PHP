<?php
    $data = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
    kategoriusia($data);
    
    function kategoriusia($data) {
        $anak = 0;
        $dewasa = 0;
        
        foreach ($data as $usia) {
            if ($usia < 17) {
                $anak++;
            }else {
                $dewasa++;
            }
        }
        
        echo "List Usia: " . implode(", ", $data);
        echo "<br>";
        echo "Jumlah Kategori Dewasa: $dewasa";
        echo "<br>";
        echo "Jumlah Kategori Anak-anak: $anak";
    }
    
?>