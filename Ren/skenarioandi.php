<html>
    <head>
        <title> Skenario Andi </title>
        <style>
            .namaku {
                background-color: red;
                text-align: center;
            }
            .time {
                background-color: black;
                text-align: center;
                color: white;
            }
            .tr,td {
                    text-align: center;
            }
            .table {
                background-color: navy;
            }
        </style>
    </head>
<body>

<?php

echo "<h1 class ='Tabel'>By Raihan dan Syahrul</h1>";
echo "<h2>JADWAL ANDI SEPULANG SEKOLAH</h2>";
echo "<table width 3000 border = 1>

    <tr><td>Pukul</td><td>Kegiatan</td></tr>

    <tr><td>15.30 - 15.45</td><td>Andi Perjalanan Pulang Sekolah</td></tr>

    <tr><td>15.47 - 16.01</td><td>Andi Mandi dan Berangkat Ngaji</td></tr>

    <tr><td>16.05 - 16.35</td><td>Andi Mengaji</td></tr>

    <tr><td>16.40 - 16.50</td><td>Andi Membeli Bumbu Saat Pulang</td></tr>

    <tr><td>16.52 - 17.22</td><td>Andi Chatting Dengan Raya</td></tr>

    <tr><td>17.23 - 17.35 </td><td>Andi Istirahat</td></tr>

    <tr><td>17.36 - 18.06</td><td>Andi Menghafalkan Dialog</td></tr>
    
    <tr><td>18.08 - 18.35 </td><td>Andi Sholat Maghrib dan Makan Malam</td></tr>

    <tr><td>18.40 - 20.40</td><td>Andi Mengerjakan Tugas</td></tr>

    <tr><td>20.45 - 21.00 </td><td>Andi Sholat Isya</td></tr>

    <tr><td>21.05 - 21.35</td><td>Andi Kumpul Keluarga dan Mengobrol</td></tr>

    <tr><td>21.40 </td><td>Andi Free dan Tidur</td></tr>
</table>";
echo '<br>';
    ?>

<?php
echo "<br> <div class='time'>";

$waktu = date ("00:01:00");

if ($waktu >= date ("15:45:00") && $waktu <= date ("15:46:00"))
{
       echo "Andi Sampai Rumah";
}
else if ($waktu >= date ("15:47:00") && $waktu <= date ("16:01:00"))
{
    echo "Andi Mandi dan Berangkat Ngaji";
}
else if ($waktu >= date ("16:05:00") && $waktu <= date ("16:35:00"))
{
    echo "Andi Mengaji";
}
else if ($waktu >= date ("16:40:00") && $waktu <= date ("16:50:00"))
{
    echo "Andi Membeli Bumbu Saat Pulang (dititipin)";
}
else if ($waktu >= date ("16:52:00") && $waktu <= date ("17:22:00"))
{
    echo "Andi Chatting Dengan Raya";
}
else if ($waktu >= date ("17:23:00") && $waktu <= date ("17:35:00"))
{
    echo "Andi Istirahat";
}
else if ($waktu >= date ("17:36:00") && $waktu <= date ("18:06:00"))
{
    echo "Andi Menghafalkan Dialog";
}
else if ($waktu >= date ("18:08:00") && $waktu <= date ("18:35:00"))
{
    echo "Andi Sholat Maghrib dan Makan Malam";
}
else if ($waktu >= date ("18:40:00") && $waktu <= date ("20:40:00"))
{
    echo "Andi Mengerjakan Tugas";
}
else if ($waktu >= date ("20:45:00") && $waktu <= date ("21:00:00"))
{
    echo "Andi Sholat Isya";
}
else if ($waktu >= date ("21:05:00") && $waktu <= date ("21:35:00"))
{
    echo "Andi Kumpul Keluarga dan Mengobrol";
}
else if ($waktu >= date ("21:40:00") && $waktu <= date ("24:00:00"))
{
    echo "Andi Tidur";
}
else if ($waktu >= date ("00:00:00") && $waktu <= date ("04:00:00"))
{
    echo "Andi Tidur";
}
else
{
    echo "waktu = another universe";
}
?>
</body>
</html>