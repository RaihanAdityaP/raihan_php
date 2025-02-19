<?php
$nilai = 900;

if($nilai <= 79 && $nilai >= 70)
{
    echo "C";
}
else if ($nilai <= 69 && $nilai >= 0)
{
       echo "D";
}
else if ($nilai <= 100 && $nilai >= 80)
{
       echo "E";
}
else if ($nilai >= 101)
{
       echo "F";
}
else 
{
    echo "wajib diatas 0";
}
//$nilai <= 100 && $nilai >= 80
?>