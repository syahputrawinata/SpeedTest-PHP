<?php
    $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bil2 = [77, 99, 55, 81, 45, 90, 98];

    $bil_sama = array_intersect($bil1, $bil2);
    $bil_tidaksama = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1));
    
    echo "<b>Bilangan yang ada dikedua variabel</b>";
    echo "<br>";
    echo implode(',',$bil_sama);
    echo "<br>";
    echo "<b>Bilangan yang tidak ada dikedua variabel</b>";
    echo "<br>";
    echo implode(',',$bil_tidaksama);
?>