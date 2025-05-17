<?php

    $numeroInserido = $_POST["numeroInserido"];

    if ($numeroInserido == 1) {
        echo "Domingo";
    } else if ($numeroInserido == 2) {
        echo "Segunda";
    } else if ($numeroInserido == 3) {
        echo "Terça";
    } else if ($numeroInserido == 4) {
        echo "Quarta";
    } else if ($numeroInserido == 5) {
        echo "Quinta";
    } else if ($numeroInserido == 6) {
        echo "Sexta";
    } else if ($numeroInserido == 7) {
        echo "Sabádo";
    } else {
        echo "Informe um valor de 1 à 7";
    }
?>