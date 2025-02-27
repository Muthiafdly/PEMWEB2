<?php

$list_buah = ["Pepaya", "Apel", "Jeruk", "Mangga", "Melon"];

/**
 * nilai didalem array masing masing memiliki sebuah kunci yg disebut index
 * 
 * index dimulai dari 0
 */

echo $list_buah [2];
echo "<br>List berisi" . count($list_buah)."buah";

// mencetak seluruh nilai didalam array
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// menambah array
$list_buah[] = "durian";

echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// menghapus nilai array berdasarkan index
unset($list_buah[1]);
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// mengubah array berdasarkan index


// mencetak seluruh nilai array beserta indexnya
echo"<ol>";
foreach ($list_buah as $index => $buah) {
    echo "<li>buah dengan index $index : $buah</li>";
}



?>