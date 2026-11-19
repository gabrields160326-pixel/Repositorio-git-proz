<?php

$nota1 = 5;
$nota2 = 6;

$media = ($nota1 + $nota2) / 2;

echo "Média: " . number_format($media, 1, ',', '.');

if ($media >= 6) {
    echo "Situação: Aprovado"; 
} elseif ($media >= 4 && $media < 6) {
    echo "Situação: Recuperação";
} else {
    echo "Situação: Reprovado";
}

?>
