<?php
// fungsi dalam PHP untuk menentukan jumlah huruf kecil dalam sebuah string
$input = "PhP DaSAR";
function lowercase($s)
{
    $u = 0;
    $d = 0;
    $n = strlen($s);

    for ($x = 0; $x < $n; $x++) {
        $d = ord($s[$x]);
        if ($d >= 97 && $d  <= 122) {
            $u++;
        }
    }

    return $u;
}
$text = ' mengandung ' . lowercase($input) . ' buah huruf kecil ';
echo '"' . $input . '" ' . $text;
