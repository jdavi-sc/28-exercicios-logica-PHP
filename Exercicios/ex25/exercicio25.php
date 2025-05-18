<?php

$telefonouParaVitima = $_POST["telefonouParaVitima"];
$esteveNoLocal = $_POST["esteveNoLocal"];
$moraPerto = $_POST["moraPerto"];
$deviaDinheiro = $_POST["deviaDinheiro"];
$trabalhouComVitima = $_POST["trabalhouComVitima"];

$somaDasRespostas = 0;

if ($telefonouParaVitima == "sim") $somaDasRespostas++;
if ($esteveNoLocal == "sim") $somaDasRespostas++;
if ($moraPerto == "sim") $somaDasRespostas++;
if ($deviaDinheiro == "sim") $somaDasRespostas++;
if ($trabalhouComVitima == "sim") $somaDasRespostas++;

if ($somaDasRespostas == 2) {
    $classificacao = "Suspeita";
} else if ($somaDasRespostas >= 3 && $somaDasRespostas <= 4) {
    $classificacao = "Cúmplice";
} else if ($somaDasRespostas == 5) {
    $classificacao = "Assassino";
} else {
    $classificacao = "Inocente";
}

echo "Classificação: $classificacao";

?>