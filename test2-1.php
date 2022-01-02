<?php
// warna kolom tertentu
function warna($input)
{
    $hitam  = array(1, 2, 5, 7, 10, 11, 13, 14, 17, 19, 22, 23, 25, 26, 29, 31, 34, 35, 37, 38, 41, 43, 46, 47, 49, 50, 53, 55, 58, 59, 61, 62);
    return in_array($input, $hitam) ? 'style="background : black; color: white;"' : 'style="background : white"';
}

$no = 1;
$urutan = 1;
$baris = 8;
echo '<table>';
for ($i = 1; $i <= $baris; $i++) {
    echo '<tr>';
    for ($x = 1; $x <= $baris; $x++) {
        echo '<td ' . warna($urutan) . '>';
        echo $no++;
        echo '</td>';
        $urutan++;
    }
    echo '</tr>';
}
echo '</table>';
