<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hitung Kompensasi Pegawai</h1>
    <form method="post">
        <label for="lama_kerja">Lama Kerja (Jam)</label>
        <input type="number" name="lama_kerja" id="lama_kerja" placeholder="Masukan Jam" required>
        <label for="jam_lebih">Jam Lebih (Jam)</label>
        <input type="number" name="jam_lebih" id="jam_lebih" placeholder="Masukan Jam" required>
        <button type="submit">Hitung</button>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]== "POST") {
            $lama_kerja = $_POST["lama_kerja"];
            $jam_lebih = $_POST["jam_lebih"];

            $tarifjampertama = 50000;
            $tarifjamselanjutnya = 25000;

            $kompensasi = 0;
            if ($jam_lebih > 0 ) {
                $kompensasi += $tarifjampertama;
                if($jam_lebih > 1) {
                    $kompensasi += ($jam_lebih - 1) * $tarifjamselanjutnya;
                }
            }

            echo "lama Kerja: $lama_kerja Jam ";
            echo "<br>";
            echo "Jam Lebih: $jam_lebih Jam ";
            echo "<br>";
            echo "jumlah Kompensasi: Rp. "  . number_format($kompensasi, 0, ',', '.') ;
        }
    ?>
</body>
</html>