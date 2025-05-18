<?php

$valorDeA = $_POST["valorDeA"];
$valorDeB = $_POST["valorDeB"];
$valorDeC = $_POST["valorDeC"];

if ($valorDeA == 0) {
    echo "O valor de 'a' não pode ser zero. Isso não é uma equação do 2º grau.";
    return;
}

$delta = $valorDeB * $valorDeB - 4 * $valorDeA * $valorDeC;

if ($delta < 0) {
    echo "A equação não possui raízes reais.";
} else if ($delta > 0) {
    $r1 = (-$valorDeB + sqrt($delta)) / (2 * $valorDeA);
    $r2 = (-$valorDeB - sqrt($delta)) / (2 * $valorDeA);
    echo "A equação possui duas raízes reais: r1 = $r1 e r2 = $r2";
} else {
    $r = -$valorDeB / (2 * $valorDeA);
    echo "A equação possui uma raiz real: r = $r";
}
?>