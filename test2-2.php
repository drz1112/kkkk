<?php
// input DFHKNQ output EDKGSK
// Subtitusi Cipher
// == 0 == 1 == 2 == 3 == 4 == 5 == 6 == 7 == 8 == 9 == 10 == 11 == 12 == 13 == 14 == 15 == 16 == 17 == 18 == 19 == 20 == 21 == 22 == 23 == 24 == 25 ==
// == A == B == C == D == E == F == G == H == I == J == K  == L  == M  == N  == O  == P  == Q  == R  == S  == T  == U  == V  == W  == X  == Y  == Z ==


// 3     5     7     10    13    16
// D     F     H     K     N     Q

// +1   -2    +3    -4    +5    -6

// E     D     K     G     S     K
// 4     3     10    6     18    10
function cipher($input)
{
    $huruf = range('A', 'Z');
    $arr_input = str_split(strtoupper($input));
    $result = '';
    $no = 1;
    for ($i = 0; $i < count($arr_input); $i++) {
        $index = array_search($arr_input[$i], $huruf);
        if ($i % 2 == 0) {
            // echo $arr_input[$i] . '=' . $index;
            // echo '+' . $i + 1;
            // echo ' = ' . $cari = $index + ($no) . '<br>';
            $result .= $huruf[$index + $no];
        } else {
            // echo $arr_input[$i] . '=' . $index;
            // echo '-' . $i + 1;
            // echo ' = ' . $cari = $index - ($no) . '<br>';
            $result .= $huruf[$index - $no];
        }
        $no++;
    }
    return $result;
}
$input = 'DFHKNQ';
echo cipher($input);
