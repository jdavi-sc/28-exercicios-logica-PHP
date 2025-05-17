<?php

    $primeiroNumero = $_POST["primeiroNumero"];
    $segundoNumero = $_POST["segundoNumero"];
    $terceiroNumero = $_POST["terceiroNumero"];


    if ($primeiroNumero > $segundoNumero && $primeiroNumero > $terceiroNumero && $segundoNumero < $primeiroNumero && $segundoNumero > $terceiroNumero && $terceiroNumero < $primeiroNumero && $terceiroNumero < $segundoNumero) {
        echo "$primeiroNumero, $segundoNumero, $terceiroNumero";
    } else if ($primeiroNumero > $segundoNumero && $primeiroNumero > $terceiroNumero && $terceiroNumero < $primeiroNumero && $terceiroNumero > $segundoNumero && $segundoNumero < $primeiroNumero && $segundoNumero < $terceiroNumero) {
        echo "$primeiroNumero, $terceiroNumero, $segundoNumero";
    
    } else if ($segundoNumero > $primeiroNumero && $segundoNumero > $terceiroNumero && $primeiroNumero < $segundoNumero && $primeiroNumero > $terceiroNumero && $terceiroNumero < $segundoNumero && $terceiroNumero < $primeiroNumero) {
        echo"$segundoNumero, $primeiroNumero, $terceiroNumero";
    } else if ($segundoNumero > $primeiroNumero && $segundoNumero > $terceiroNumero && $terceiroNumero < $segundoNumero && $terceiroNumero > $primeiroNumero && $primeiroNumero < $segundoNumero && $primeiroNumero < $terceiroNumero) {
        echo "$segundoNumero, $terceiroNumero, $primeiroNumero";
    
    } else if ($terceiroNumero > $primeiroNumero && $terceiroNumero > $segundoNumero && $segundoNumero < $terceiroNumero && $segundoNumero > $primeiroNumero && $primeiroNumero < $terceiroNumero && $primeiroNumero < $segundoNumero) {
        echo "$terceiroNumero, $segundoNumero, $primeiroNumero";
    } else if ($terceiroNumero > $primeiroNumero && $terceiroNumero > $segundoNumero && $primeiroNumero < $terceiroNumero && $primeiroNumero > $segundoNumero && $segundoNumero < $terceiroNumero && $segundoNumero < $primeiroNumero) {
        echo "$terceiroNumero, $primeiroNumero, $segundoNumero";

    } else {
        echo "Digite números diferentes";
    }
?>