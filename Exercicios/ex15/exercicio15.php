<?php

    $primeiroLado = $_POST["primeiroLado"];
    $segundoLado = $_POST["segundoLado"];
    $terceiroLado = $_POST["terceiroLado"];
    $isTriangulo = $primeiroLado + $segundoLado > $terceiroLado || $primeiroLado + $terceiroLado > $segundoLado || $segundoLado + $primeiroLado > $terceiroLado || $segundoLado + $terceiroLado > $primeiroLado || $terceiroLado + $primeiroLado > $segundoLado || $terceiroLado + $segundoLado > $primeiroLado;


    if ($primeiroLado == $segundoLado && $primeiroLado == $terceiroLado) {
        echo "Forma um triangulo: $isTriangulo <br>
        Forma um triangulo equilátero";
    } else if ($primeiroLado == $segundoLado || $primeiroLado == $terceiroLado || $segundoLado == $primeiroLado || $segundoLado == $terceiroLado || $terceiroLado == $primeiroLado || $terceiroLado == $segundoLado) {
        echo "Forma um triangulo: $isTriangulo <br>
        Forma um triangulo isósceles";
    } else if ($primeiroLado <> $segundoLado && $primeiroLado <> $terceiroLado && $segundoLado <> $primeiroLado && $segundoLado <> $terceiroLado && $terceiroLado <> $primeiroLado && $terceiroLado <> $segundoLado) {
        echo "Forma um triangulo: $isTriangulo <br>
        Forma um triangulo  Escaleno";
    } else {
        echo "Não forma um triangulo";
    }
?>