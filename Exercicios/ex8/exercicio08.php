<?php

    $primeiroValor = $_POST["primeiroValor"];
    $segundoValor = $_POST["segundoValor"];
    $terceiroValor = $_POST["terceiroValor"];

    if ($primeiroValor < $segundoValor && $primeiroValor < $terceiroValor) {
        echo "O produto mais barato custa: $primeiroValor";
    } else if ($segundoValor < $primeiroValor && $segundoValor < $terceiroValor) {
        echo "O produto mais barato custa: $segundoValor";
    } else if ($terceiroValor < $primeiroValor && $terceiroValor < $segundoValor) {
        echo "O produto mais barato custa: $terceiroValor";
    } else {
        echo "Os produtos custam o mesmo valor";
    }

?>