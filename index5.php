<?php
// function (build-in function atau user defined function)
$text = "hello world";
echo "panjang dari text iyalah" . strlen($text) . "karakter.";


//function date
echo "<br>";
echo date("Y-m-d h:i:s");

function salam($nama = "admind"){
    return "Selamat Datang, $nama";
}
?>

<html>
    <body>
        <h1><?php echo salam(); ?></h1>
    </body>
</html>