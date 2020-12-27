<!DOCTYPE html>
<html>

<head>
    <title>Latihan 1</title>

    <?php
    $bil1 = 25;
    $bil2 = 5;

    $tambah = $bil1 + $bil2;
    $kurang = $bil1 - $bil2;
    $bagi = $bil1 / $bil2;
    $kali = $bil1 * $bil2;
    $mod = $bil1 % $bil2;

    echo "bilangan 1 = " . $bil1 . "<br>";
    echo "bilangan 2 = " . $bil2 . "<br>";
    echo "<br>";
    echo "Berikut merupakan hasil dari seriap operasi<br><br>";
	
    echo "Operator Penjumlahan<br>";
    echo "Hasil : " . $tambah . "<br>";
	
    echo "<br>Operator Pengurangan<br>";
    echo "Hasil : " . $kurang . "<br>";
	
    echo "<br>Operator Perkalian<br>";
    echo "Hasil : " . $kali . "<br>";
   
    echo "<br>Operator Pembagian<br>";
    echo "Hasil : " . $bagi . "<br>";
	
    echo "<br>Operator Modulus<br>";
    echo "Hasil : " . $mod . "<br>";
    ?>
