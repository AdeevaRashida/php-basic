<?php 

    // echo "Menghitung Volume Bola \n";
    // echo "-----------------------\n";

    // // Menggunakan Const
    // const PI = 3.14;
    // echo "Masukkan Jari-jari bola : ";
    // $r = fgets(STDIN);
    // $volume = PI * $r * $r * $r ;
    // echo "rumus Volume bola adalah V = 3.14 * r * r * r \n";
    // echo "Volume bola adalah ". $volume ."\n";

    // // Menggunakan fungsi define()
    // // Parameter 1 menyatakan nama konstanta
    // // Parameter 2 menyatakan nilai konstanta
    // echo "Menghitung Luas Permukaan Bola \n";
    // echo "-------------------------------\n";
    
    // define('ph1', 3.14);
    // echo "Masukkan Jari-jari bola : ";
    // $r1 = fgets(STDIN);
    // $luas_permukaan_bola = 4 * PI * $r1 * $r1 ;
    // echo "rumus Luas Permukaan Bola LP = 4 * 3.14 * r * r \n";
    // echo "Luas Permukaan Bola adalah ". $luas_permukaan_bola ."\n";



    echo "Menghitung Gaya Gravitasi Di Bumi \n";
    echo "-----------------------\n";

    // Menggunakan Const
    const GB = 9.8; // 9.8m/s2
    echo "Masukkan Massa Objek : ";
    $m = fgets(STDIN);
    $ggdb = $m * GB ;
    echo "Rumus Gaya Gravitasi Di Bumi || F = m * g \n";
    echo "Hasilnya Adalah ". $ggdb ."\n";
    
?>