<!DOCTYPE html>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<?php 

    $name_pesan = $email_pesan = "";
    $name = $email = " ";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if (empty($_POST["name"])) {
            $name_pesan = "Name harus diisi";
        } else {
            $name = htmlspecialchars($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $email_pesan = "Email harus diisi";
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }

    }

?>

<h2>Contoh Form Validation dengan PHP</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="name">
        <span class="error">* <?php echo $name_pesan;?></span>
        <br><br>
        Email: <input type="text" name="email">
        <span class="error">* <?php echo $email_pesan;?></span>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
        echo "<h2>Yang kamu inputkan</h2>";
        echo "Nama: ". $name;
        echo "<br>";
        echo "E-Mail: ". $email;
    ?>
    
</body>
</html>