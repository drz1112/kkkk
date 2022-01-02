<?php
// $nilai = “72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86”;
// min max avg array

$txt = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
$arr = (explode(" ", $txt));


echo "======Cara ke-1 min & max ============<br>";
echo "Max:" . max($arr) . '<br>';
echo "Min:" . min($arr) . '<br>';
echo "======Cara ke-2 min & max ============<br>";
$arrlength = count($arr);
(sort($arr));
echo "Max:" . $arr[$arrlength - 1];
echo '<br>';
echo "Min:" . $arr[0];
echo '<br>';
echo "======Cara ke-3 min & max ============<br>";
function max_array($input_max)
{
    $input_arr_max = (explode(" ", $input_max));
    return max($input_arr_max);
}
function min_array($input_min)
{
    $input_arr_min = (explode(" ", $input_min));
    return min($input_arr_min);
}
echo "Max:" . max_array($txt);
echo '<br>';
echo "Min:" . min_array($txt);
echo '<br>';
echo "======Cara ke-4 min & max ============<br>";
function max_array_2($input_max)
{
    $input_arr_max_2 = (explode(" ", $input_max));
    $arrlength = count($input_arr_max_2);
    (sort($input_arr_max_2));
    return $input_arr_max_2[$arrlength - 1];
}
function min_array_1($input_min)
{
    $input_arr_min_2 = (explode(" ", $input_min));
    (sort($input_arr_min_2));
    return $input_arr_min_2[0];
}
echo "Max:" . max_array_2($txt);
echo '<br>';
echo "Min:" . min_array_1($txt);
echo '<br>';
echo "====== Average ============<br>";
$average = array_sum($arr) / count($arr);
echo "Average:" . $average;
echo '<br>';
