<?php
// Unigram , Bigram,Trigram (N-gram Php)
function N_igram_2($input, $N)
{
    $arr_input = explode(' ', $input);
    $hsl = '';
    $x = 0;
    $Unigram = '';

    foreach ($arr_input as $value) {
        if ($x < $N) {
            $Unigram .= $value . ' ';
            $x++;
            continue;
        } else {
            $Unigram .= $value . ', ';
            $x = 0;
        }
    }
    $Unigram = substr($Unigram, 0, -2);
    if ($N == 0) {
        $Ngram = 'Unigram';
        $hsl .= $Ngram . ' :' . $Unigram . '<br>';
    } elseif ($N == 1) {
        $Ngram = 'Bigram';
        $hsl .= $Ngram . ' :' . $Unigram . '<br>';
    } else {
        $Ngram = 'Trigram';
        $hsl .= $Ngram . ' :' . $Unigram . '<br>';
    }

    return $hsl;
}
$input = 'Jakarta adalah ibukota negara Republik Indonesia';
for ($i = 0; $i < 3; $i++) {
    echo N_igram_2(strtolower($input), $i);
}
