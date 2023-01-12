<?php 
// Pertemuan 2 - LATIHAN PHP
// Operator

// Operator aritmatika
// +. -, *, /, % = Plus, Minus, Multiplication , Devision, Modulus

$a = 10;
$b = 20;

$c = $a * $b;
// echo "$c";



// Operator Relation
// > , < , == , != , >= , <=

// $d = $a > $b;
// echo "$a > $b : $d <br>"; // -> mengembalikan nilai true (1) / false (0) dalam angka

// $d = $a < $b;
// echo "$a < $b : $d <br>";

// $d = $a == $b;
// echo "$a == $b : $d <br>";

// $d = $a != $b;
// echo "$a != $b : $d <br>";

// $d = $a >= $b;
// echo "$a >= $b : $d <br>";

// $d = $a <= $b;
// echo "$a <= $b : $d <br>";



// Operator Logika
// &&, ||, !

$x = 10;
var_dump($x > 20 && $x %2 == 0);
?>