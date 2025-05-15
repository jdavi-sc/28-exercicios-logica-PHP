<?php

    $sexoDoUsuario = $_POST["sexoInformado"];

    if ($sexoDoUsuario == "F" || $sexoDoUsuario == "f") {
        echo "Seu sexo é feminino";

    } else if ($sexoDoUsuario == "M" || $sexoDoUsuario == "m") {
        echo "Seu sexo é masculino";

    } else {
        echo "Sexo inválido, escholha entre 'M' ou 'F'.";
    }

?>