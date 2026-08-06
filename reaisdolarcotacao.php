<?php

$reais;
$cotacao = 5.20;
$dolar;


$reais = floatval(readline("Digite um valor em reais: "));


$dolar = $reais / $cotacao;


print("O valor em dolares é US$" . number_format($dolar, 2));

?>
