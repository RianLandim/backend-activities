<?php
function comp($a) {
    return $a;
}

$n = intval(fgets(STDIN));

$pares = array();
$impares = array();
for ($i = 0; $i < $n; $i++) {
    $numero = intval(fgets(STDIN));

    if ($numero % 2 == 0) {
        array_push($pares, $numero);
    } else {
        array_push($impares, $numero);
    }
}

usort($pares, 'comp');
usort($impares, 'comp');
$impares = array_reverse($impares);

foreach ($pares as $numero) {
    echo $numero . "\n";
}
foreach ($impares as $numero) {
    echo $numero . "\n";
}
?>
