<?php

$numeroInserido = $_POST ["numeroInserido"];

$arredondado = round($numeroInserido);

if ($numeroInserido == $arredondado) {
    echo"$numeroInserido é um número INTEIRO.";
} else {
    echo"$numeroInserido é um número DECIMAL.";
}

?>