<?php

    $primeiraNotaDoAluno = $_POST["primeiraNota"];
    $segundaNotaDoAluno = $_POST["segundaNota"];

    $mediaDoAluno = ($primeiraNotaDoAluno + $segundaNotaDoAluno) / 2;

    if ($mediaDoAluno > 0 && $mediaDoAluno >= 7 && $mediaDoAluno <= 9) {
        echo "A média do aluno foi $mediaDoAluno, APROVADO";
    } else if ($mediaDoAluno < 7 && $mediaDoAluno >= 0) {
        echo "A média do aluno foi $mediaDoAluno, REPROVADO";
    } else if ($mediaDoAluno === 10) {
        echo "A média do aluno foi $mediaDoAluno, APROVADO COM DISTINÇÃO";
    } else {
        echo "Nota inválida";
    }
?>