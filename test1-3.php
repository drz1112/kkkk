<?php
// Unigram , Bigram,Trigram (N-gram Php)
function N_igram($input)
{
    $arr_input = explode(' ', $input);
    $hsl = '';
    $x = 0;
    $Unigram = '';
    $Bigram = '';
    $Trigram = '';
    foreach ($arr_input as $item) {
        if ($x < 0) {
            $Unigram .= $item . ' ';
            $x++;
        } else {
            $Unigram .= $item . ', ';
            $x = 0;
        }
    }
    $Unigram = substr($Unigram, 0, -2);

    foreach ($arr_input as $item) {
        if ($x < 1) {
            $Bigram .= $item . ' ';
            $x++;
        } else {
            $Bigram .= $item . ', ';
            $x = 0;
        }
    }
    $Bigram = substr($Bigram, 0, -2);

    foreach ($arr_input as $item) {
        if ($x < 2) {
            $Trigram .= $item . ' ';
            $x++;
        } else {
            $Trigram .= $item . ', ';
            $x = 0;
        }
    }
    $Trigram = substr($Trigram, 0, -2);

    $hsl .= 'Unigram : ' . strtolower($Unigram) . '<br>';
    $hsl .= 'Bigram : ' . strtolower($Bigram) . '<br>';
    $hsl .= 'Trigram : ' . strtolower($Trigram) . '<br>';
    return $hsl;
}

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
echo "========= Cara ke-1 ============= <br>";
echo N_igram($input);

echo "<br>";
echo "========= Cara ke-2 ============= <br>";
for ($i = 0; $i < 3; $i++) {
    echo N_igram_2(strtolower($input), $i);
}
