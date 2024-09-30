<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mencari Angka</h1>
    <form method="post">
        <label for="teks">Masukan Teks</label>
        <input type="text" id="teks" name="teks" placeholder="Masukan Teks" required>
        <button type="submit">Kirim</button>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]== "POST") {
            $teks = $_POST["teks"];
            preg_match_all('/\d/', $teks, $matches);
            $numbers = implode(',', $matches[0]);

            if(!empty($numbers)) {
                echo "Teks yang ditulis: $teks dan teks mengandung angka: $numbers." ;
            }else {
                echo "Teks tidak mengandung angka";
            }
        }
    ?>
</body>
</html>