<?php

$primeiroValor = $_POST["primeiroValor"];
$segundoValor = $_POST["segundoValor"];
$operacao = $_POST["operacao"];

if ($operacao === "A") {

    if ($primeiroValor % 2 == 0) {
        echo "O número $primeiroValor é par <br>";
    } else {
        echo "O número $primeiroValor é ímpar <br>";
    }

    if ($segundoValor % 2 == 0) {
        echo "O número $segundoValor é par <br>";
    } else {
        echo "O número $segundoValor é ímpar <br>";
    }
} elseif ($operacao === "B") {

    if ($primeiroValor >= 0) {
        echo "O número $primeiroValor é positivo <br>";
    } else {
        echo "O número $primeiroValor é negativo <br>";
    }

    if ($segundoValor >= 0) {
        echo "O número $segundoValor é positivo <br>";
    } else {
        echo "O número $segundoValor é negativo <br>";
    }
} elseif ($operacao === "C") {

    if (floor($primeiroValor) == $primeiroValor) {
        echo "O número $primeiroValor é inteiro <br>";
    } else {
        echo "O número $primeiroValor é decimal <br>";
    }

    if (floor($segundoValor) == $segundoValor) {
        echo "O número $segundoValor é inteiro <br>";
    } else {
        echo "O número $segundoValor é decimal <br>";
    }
} else {
    echo "Erro: operação inválida.";
}

?>