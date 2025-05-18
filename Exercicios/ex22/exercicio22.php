<?php

$numeroInserido = $_POST ["numeroInserido"];

if($numeroInserido %2 == 0){
    echo"O numero $numeroInserido é par";
}else
    echo"O numero $numeroInserido é impar";
?>
