<?php

    $turnoDoAluno = $_POST["turnoDoAluno"];

    if ($turnoDoAluno === "M" || $turnoDoAluno === "m") {
    echo("Bom Dia!");
} else if ($turnoDoAluno === "V" || $turnoDoAluno === "v") {
    echo("Boa Tarde!");
} else if ($turnoDoAluno === "N" || $turnoDoAluno === "n") {
    echo("Boa Noite!");
}else{
    echo("Valor inválido");
}

?>