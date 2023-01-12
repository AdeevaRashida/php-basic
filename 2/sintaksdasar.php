<?php 
// Pertemuan 2 - Latihan PHP
// Sintaks PHP


// Standar Output:
// echo, print
// print_r -> array
// var_dump

//echo:
// echo "Adeeva Rashida<br>";
// echo "Ini ", "text ", "yang ", "dipisah <br>";
// echo "Ini " . "Text";

// print (only 1 parameter, you cannot add two parameters):
// print "Adeeva Rashida";
// print "Adeeva ", "Rashida"; //-> this cannot be executed

// print_r
// $nama_siswa = array("Teya", "Nasywa", "Adeeva");
// print_r($nama_siswa); //-> will show every data, including the array and stuff

// var_dump
// var_dump("Adeeva Rashida"); //-> will show the string "" and also how many characters in the string


// Penulisan sintaks PHP
// 1. PHP inside HTML
// 2. HTML inside PHP
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>

    <!-- PHP inside HTML -->
    <h1>Hello, Welcome <?php echo "Adeeva"; ?> </h1>
    <p><?php echo "This is a paraghraph"; ?></p>

    <!-- HTML inside PHP -->
    <?php 
        echo "<h1>Welcome Adeeva Rashida</h1>"
    ?>
</body>
</html>