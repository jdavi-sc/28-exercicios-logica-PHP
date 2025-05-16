<?php

    $primeiroNumero = $_POST["primeiroNumero"];
    $segundoNumero = $_POST["segundoNumero"];
    $terceiroNumero = $_POST["terceiroNumero"];

    if ($primeiroNumero > $segundoNumero && $primeiroNumero > $terceiroNumero && $segundoNumero < $terceiroNumero) {
        echo "O maior número é o $primeiroNumero e o menor é o $segundoNumero";
    } else if ($primeiroNumero > $segundoNumero && $primeiroNumero > $terceiroNumero && $terceiroNumero < $segundoNumero) {
        echo "O maior número é o $primeiroNumero e o menor é o $terceiroNumero";

    } else if ($segundoNumero > $primeiroNumero && $segundoNumero > $terceiroNumero && $primeiroNumero < $terceiroNumero) {
        echo "O maior número é o $segundoNumero e o menor é o $primeiroNumero";
    } else if ($segundoNumero > $primeiroNumero && $segundoNumero > $terceiroNumero && $terceiroNumero < $primeiroNumero) {
        echo "O maior número é o $segundoNumero e o menor é o $terceiroNumero";

    } else if ($terceiroNumero > $primeiroNumero && $terceiroNumero > $segundoNumero && $primeiroNumero < $segundoNumero) {
        echo "O maior número é o $terceiroNumero e o menor é o $primeiroNumero";
    } else if ($terceiroNumero > $primeiroNumero && $terceiroNumero > $segundoNumero && $segundoNumero < $primeiroNumero) {
        echo "O maior número é o $terceiroNumero e o menor é o $segundoNumero";

    } else {
        echo "Informe números com os valores diferentes";
    }

?>