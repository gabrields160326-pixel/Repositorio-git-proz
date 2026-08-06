<?php

$a = floatval(readline("Digite o valor de A: "));
$b = floatval(readline("Digite o valor de B: "));

echo "\nValores originais:\n";

echo "A = $a\n";
echo "B = $b\n";

$troca = $a;
$a = $b;
$b = $troca;

echo "\nValores trocados:\n";

echo "A = $a\n";
echo "B = $b\n";

?>
