<?php

    $primeiroNumero = $_POST["primeiroNumero"];
    $segundoNumero = $_POST["segundoNumero"];
    $terceiroNumero = $_POST["terceiroNumero"];

    if ($primeiroNumero > $segundoNumero && $primeiroNumero > $terceiroNumero) {
        echo "O maior número é $primeiroNumero";
    } else if ($segundoNumero > $primeiroNumero && $segundoNumero > $terceiroNumero) {
        echo "O maior número é $segundoNumero";
    } else if ($terceiroNumero > $primeiroNumero && $terceiroNumero > $segundoNumero) {
        echo "O maior número é $terceiroNumero";
    } else {
        echo "Os valores são iguais";
    }

?>