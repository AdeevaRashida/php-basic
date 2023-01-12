<?php 

echo "----------Menghitung Luas Lingkaran----------";
echo "<hr>";

echo "Masukkan jari-jari / radius : ";
$jari = fgets(STDIN);
$luas = 3.14 * $jari * $jari ;

echo "Luas Lingkaran Adalah : " . $luas;



// echo "----------Menghitung Luas Segitiga----------";
// echo "<hr>";

// $alas = 6;
// $tinggi = 6;
// $luas = $alas * $tinggi / 2 ;

// echo "Luas Segitiga Adalah : " . $luas;



// echo "----------Menghitung Luas Belah Ketupat----------";
// echo "<hr>";

// $d1 = 12;
// $d2 = 16;
// $luas = $d1 * $d2 / 2 ;

// echo "Luas Belah Ketupat Adalah : " . $luas;

?>