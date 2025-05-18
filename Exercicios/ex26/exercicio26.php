<?php
$litrosComprados = $_POST["litrosComprados"];
$tipoDeCombustivel = $_POST["tipoDeCombustivel"];

$Precoalcool = 3.90;
$Precogasolina = 5.50;

$desconto;
$preco;


if ($tipoDeCombustivel == "A") {
    $preco = $Precoalcool;
    if ($litrosComprados <= 20) {
        $desconto = 0.03 * $litrosComprados * $preco;
    } else {
        $desconto = 0.05 * $litrosComprados * $preco;
    }
} else if ($tipoDeCombustivel == "g") {
    $preco = $Precogasolina;
    if ($litrosComprados <= 20) {
        $desconto = 0.04 * $litrosComprados * $preco;
    } else {
        $desconto = 0.06 * $litrosComprados * $preco;
    }
} else {
    echo "Tipo de combustivel invalido";
}
$total = ($litrosComprados * $preco) - $desconto;
echo "O valor a ser pago é R$ $total";