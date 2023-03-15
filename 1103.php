<?php

$lines = explode("\n", file_get_contents("php://stdin"));

function converte($horas, $minutos) {
  return 60 * $horas + $minutos;
}

while(count($lines)) {
  [$H1, $M1, $H2, $M2] = explode(" ", trim(array_shift($lines)));
  
  if(!$H1 && !$M1 && !$H2 && !$M2) {
    break;
  }
  
  if($H2 < $H1 || ($H2 == $H1 && $M2 < $M1)) {
    $H2 += 24;
  }
  
  $resposta = converte($H2, $M2) - converte($H1, $M1);
  
  echo $resposta . "\n";
}

?>
