<?php

$diaInformado = $_POST["diaInformado"];
$mesInformado = $_POST["mesInformado"];
$anoInformado = $_POST["anoInformado"];

if ($diaInformado >= 1 && $diaInformado < 31 && $mesInformado >= 1 && $mesInformado <= 12 && $anoInformado > 1) {
    echo "A data é válida";
} else {
    echo "A data é inválida";
}