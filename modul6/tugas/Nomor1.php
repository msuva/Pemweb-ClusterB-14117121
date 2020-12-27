<?php
function faktor($bilangan){
    if ($bilangan >= 1) {
        echo "faktorial dari $bilangan adalah </br>";
        for ($i = 1; $i <= $bilangan; $i++) {
            $j = 1;

            echo $i . "! = ";

            for ($k = $i; $k > 0; $k--) {
                if ($k == 1) {
                    echo " 1 = " . $j;
                } else {
                    echo $k . " x ";
                };
                $j = $j * $k;
            }
            echo "</br>";
        }
    } else if ($bilangan == 0) {

        echo "0! = 1";
    } else {
        echo "Anda salah memasukkan bilangan.";
    }
}

$hasil = faktor(20);