<?php

$primeiraNota = $_POST["primeiraNota"];
$segundaNota = $_POST["segundaNota"];
$terceiraNota = $_POST["terceiraNota"];
$media = ($primeiraNota + $segundaNota + $terceiraNota) / 3;

if ($media == 10) {
    echo "Sua média foi $media, você está APROVADO COM DISTINÇÃO";

} else if ($media >= 7) {
    echo "Sua média foi $media, você está APROVADO";

} else if ($media <= 7){
    echo "Sua média foi $media, você está REPROVADO";
}