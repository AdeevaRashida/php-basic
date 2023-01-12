<?php 

    echo "Masukan Nilai a: ";
    $a = fgets(STDIN);

    echo "Pre-Decrement \n";
    echo "Nilai $a sebelum dikurang : $a \n";
    echo "Nilai --$a: ". --$a ."\n";
    echo "Nilai setelah dikurang: $a \n";

    echo "\n";

    echo "Post-Decrement \n";
    echo "Nilai $a sebelum dikurang : $a \n";
    echo "Nilai $a--: ". $a-- ."\n";
    echo "Nilai setelah dikurang: $a \n";
?>