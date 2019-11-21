<?php

$x = 8;
$y = 8;

function fun_0($x, $y){
  if ($x * $y < 8)
    return -1;
  else{
    $n = $x * $y;

    for ($c = $n, $i = 1; $i < 8; $i++)
      $c = ($c * ($n - $i)) / ($i + 1);

    return $c;
  }
}

echo fun_0($x, $y);

?>
