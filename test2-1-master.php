<?php

function pola($input)
{
    $hitam  = array(1, 2, 5, 7, 10, 11);
    $putih = array(3, 4, 6, 8, 9, 12);
    if (in_array($input, $hitam)) {
        return 'style="background : black; color: white;"';
    } else {
        return 'style="background : white"';
    }
}

$no = 1;
$urutan = 1;
$col = 8;
echo "<table>";
for ($i = 1; $i <= $col; $i++) {
    echo '<tr>';
    for ($x = 1; $x <= $col; $x++) {
        echo '<td ' . pola($urutan) . '>';
        echo $no++;
        echo '</td>';
        if ($urutan == 12) {
            $urutan = 1;
        } else {
            $urutan++;
        }
    }
    echo '</tr>';
}
echo "</table>";
