<?php

$input = file_get_contents('php://stdin');
$lines = explode("\n", $input);

$N = intval(array_shift($lines));

for ($i = 0; $i < $N; ++$i) {
    $alfabeto = array_shift($lines);
    $deslocamento = intval(array_shift($lines));

    $resposta = implode('', array_map(function ($x) use ($deslocamento) {
        return chr(((ord($x) - 65 - $deslocamento + 26) % 26) + 65);
    }, str_split(trim($alfabeto))));

    echo $resposta . "\n";
}