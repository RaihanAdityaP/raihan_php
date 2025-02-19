<?php
$waktu = date ("18:30:00");

if ($waktu >= date ("00:00:00") && $waktu <= date ("04:00:00"))
{
    echo "waktu = dini hari";
}
else if ($waktu >= date ("04:00:00") && $waktu <= date ("10:00:00"))
{
       echo "waktu = pagi hari";
}
else if ($waktu >= date ("10:00:00") && $waktu <= date ("15:00:00"))
{
       echo "waktu = siang hari";
}
else if ($waktu >= date ("15:00:00") && $waktu <= date ("17:30:00"))
{
       echo "waktu = sore hari";
}
else if ($waktu >= date ("17:30:00") && $waktu <= date ("18:30:00"))
{
       echo "waktu = petang hari";
}
else if ($waktu >= date ("18:30:00") && $waktu <= date ("24:00:00"))
{
    echo "waktu = malam hari";
}
else
{
    echo "waktu = another universe";
}
?>