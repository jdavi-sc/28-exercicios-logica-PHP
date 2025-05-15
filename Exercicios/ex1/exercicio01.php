<?php

    $primeiroNumeroInformado = $_POST["primeiroNumero"];
    $segundoNumeroInformado = $_POST["segundoNumero"];


    if ($primeiroNumeroInformado > $segundoNumeroInformado) {

    echo "$primeiroNumeroInformado é maior que $segundoNumeroInformado";

    } else if ($segundoNumeroInformado > $primeiroNumeroInformado) {

        echo "$segundoNumeroInformado é maior que $primeiroNumeroInformado";

    } else {
        
        echo "Os números possuem o mesmo valor";
    }

?>