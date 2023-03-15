<?php

$input = file_get_contents("php://stdin");
$lines = explode("\n", $input);

$N = intval(array_shift($lines));

for ($i = 0; $i < $N; ++$i) {
    $M = str_split(trim(array_shift($lines)));

    $M = array_map(function($x) {
        return preg_match('/[A-Za-z]/i', $x) ? chr(ord($x) + 3) : $x;
    }, $M);

    $M = array_reverse($M);

    $metade = intval(floor(count($M) / 2));

    $M = array_map(function($x, $i) use ($metade) {
        return $i < $metade ? $x : chr(ord($x) - 1);
    }, $M, array_keys($M));

    $resposta = implode('', $M);

    echo $resposta . "\n";
}

?>