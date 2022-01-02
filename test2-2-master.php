<?php

//  RUMUS : +1 -2 +3 .... dst

function enkrip($input)
{
    $huruf = range('A', 'Z');
    $input = strtoupper($input);
    $arr_input = str_split($input);
    print_r($arr_input);
    echo '<br>';
    $plus = true;
    $hasil = '';
    $x = 1;
    $tmp = 0;
    for ($i = 0; $i < count($arr_input); $i++) {
        $tmp = array_search($arr_input[$i], $huruf);
        echo $tmp . '-' . $arr_input[$i] . '<br>';
        if ($plus == true) {
            $hasil .= $huruf[$tmp + $x];
            $plus = false;
        } else {
            $ne = $tmp - $x;
            if ($ne < 0) {
                $ne = count($huruf) + ($ne);
            }
            $hasil .= $huruf[$ne];
            $plus = true;
        }
        $x++;
    }

    return $hasil;
}
$input = 'DFHKNQ';
echo enkrip($input);
