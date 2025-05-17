<?php

    $primeiraNota = $_POST["primeiraNota"];
    $segundaNota = $_POST["segundaNota"];
    $mediaDoAluno = ($primeiraNota + $segundaNota) / 2;

    if ($mediaDoAluno >= 9.0 && $mediaDoAluno <= 10.0) {
        echo "Sua média foi $mediaDoAluno, Nota A";
    } else if ($mediaDoAluno >= 7.5 && $mediaDoAluno < 9.0) {
        echo "Sua média foi $mediaDoAluno, Nota B";
    } else if ($mediaDoAluno >= 6.0 && $mediaDoAluno < 7.5) {
        echo "Sua média foi $mediaDoAluno, Nota C";
    } else if ($mediaDoAluno >= 4.0 && $mediaDoAluno < 6.0) {
        echo "Sua média foi $mediaDoAluno, Nota D";
    } else if ($mediaDoAluno < 4.0 && $mediaDoAluno >= 0) {
        echo "Sua média foi $mediaDoAluno, Nota E";
    } else {
        echo "Informe uma nota válida";
    }
?>