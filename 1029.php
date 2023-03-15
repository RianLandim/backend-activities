<?php

function MDC($a, $b) {
    return ($b === 0) ? $a : MDC($b, $a % $b);
}

$input = file_get_contents('php://stdin');
$lines = explode("\n", trim($input));

$N = intval(array_shift($lines));

for ($i = 0; $i < $N; ++$i) {
    [$F1, $F2] = array_map('intval', explode(' ', trim(array_shift($lines))));
    echo MDC($F1, $F2) . "\n";
}
