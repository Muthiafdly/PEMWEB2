<?php

$nama_depan = "Muthia";
$nama_belakang = 'Fadly';
$umur = 19;
$tb = 159;
$berat = 65;

echo $nama_depan . " " . $nama_belakang;
echo "<br>Nama saya adalah $nama_depan dan saya berumur $umur tahun.";

// variabel system
echo 'Document Root' . $_SERVER['DOCUMENT_ROOT'];

// variabel constant
define('PHI' , 3.14);

$r = 5;
?>