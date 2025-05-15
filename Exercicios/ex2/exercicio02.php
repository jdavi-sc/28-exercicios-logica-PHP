<?php

    $numeroInserido = $_POST["numeroInformado"];

    if ($numeroInserido > 0) {
        echo "O número $numeroInserido é positivo";
    } else if ($numeroInserido < 0) {
        echo "O número $numeroInserido é negativo";
    } else {
        echo "O número $numeroInserido é neutro";
    }

?>