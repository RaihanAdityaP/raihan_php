<?php
$angka1 = 12;
$angka2 = 6;
$plus = $angka1 + $angka2;
$x = $angka1 * $angka2;
$bagi = $angka1 / $angka2;
$min = $angka1 - $angka2;
echo $angka1 . " + " . $angka2 . " = " . $plus;
// echo '<br>' "$angka1 . " * " . $angka2 . " = " . $x";
echo "<br> $angka1 * $angka2 = $x";
echo "<br> $angka1 : $angka2 = $bagi";
echo "<br> $angka1 - $angka2 = $min";
echo "<br> $angka1 <sup> $angka2 </sup> = "; //sup pangkat utk html
echo pow(12,6); //pow pangkat utk php
echo "<br>";
echo pow($angka1,$angka2); //pow pangkat utk php
?>