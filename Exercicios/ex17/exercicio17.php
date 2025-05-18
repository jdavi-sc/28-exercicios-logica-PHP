<?php

$anoAtual = $_POST ["anoAtual"];

if ($anoAtual %4 == 0){
    echo"O ano $anoAtual é bissexto";
}
else{
    echo"O ano $anoAtual não é bissexto";
}