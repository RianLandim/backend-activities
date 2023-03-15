<?php
$input = file_get_contents('php://stdin');
$lines = explode(PHP_EOL, $input);

$leds = [6, 2, 5, 5, 4, 5, 6, 3, 7, 6];

$N = (int)array_shift($lines);

for ($i = 0; $i < $N; ++$i) {
    $V = array_map('intval', str_split(trim(array_shift($lines))));

    $resposta = array_reduce($V, function ($acc, $cur) use ($leds) {
        return $acc + $leds[$cur];
    }, 0);

    echo "{$resposta} leds\n";
}
?>
