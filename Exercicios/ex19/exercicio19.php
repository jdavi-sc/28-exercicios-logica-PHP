<?php

$numeroInformado = $_POST["numeroInformado"];
$centena = $numeroInformado / 100;
$dezena =  ($numeroInformado%100) /10;
$unidade = $numeroInformado % 10;


if($numeroInformado >= 0 && $numeroInformado <= 1000 ){
    
    echo "O numero é: $numeroInformado  <br> Centenas: $centena <br> Dezenas: $dezena <br> Unidades: $unidade";
}else{
    echo "Número inválido";
}
?>