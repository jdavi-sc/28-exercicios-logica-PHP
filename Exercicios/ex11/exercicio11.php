<?php

    $salarioDoColaborador = $_POST["salario"];

    if ($salarioDoColaborador > 0 && $salarioDoColaborador <= 280.00) {
    $valorDoAumento = ($salarioDoColaborador * 20) / 100;
    $reajuste = ($salarioDoColaborador + $valorDoAumento);
    echo("Sálario antes do reajuste: R$$salarioDoColaborador <br>
        porcentual do aumento foi de 20% <br>
        O valor do aumento foi de R$$valorDoAumento <br>
        Novo salario: R$$reajuste"
    );

} else if ($salarioDoColaborador >= 280.00 && $salarioDoColaborador < 700.00) {
    $valorDoAumento = ($salarioDoColaborador * 15) / 100;
    $reajuste = ($salarioDoColaborador + $valorDoAumento);
    echo("Sálario antes do reajuste: R$$salarioDoColaborador <br>
        porcentual do aumento foi de 15% <br>
        O valor do aumento foi de R$$valorDoAumento <br>
        novo salario: R$$reajuste");

} else if ($salarioDoColaborador >= 700.00 && $salarioDoColaborador < 1500.00) {
    $valorDoAumento = ($salarioDoColaborador * 10) / 100;
    $reajuste = ($salarioDoColaborador + $valorDoAumento);
    echo("Sálario antes do reajuste: R$$salarioDoColaborador <br>
        porcentual do aumento foi de 10% <br>
        O valor do aumento foi de R$$valorDoAumento <br>
        novo salario: R$$reajuste");

} else if ($salarioDoColaborador > 1500.00) {
    $valorDoAumento = ($salarioDoColaborador * 5) / 100;
    $reajuste = ($salarioDoColaborador + $valorDoAumento);
    echo("Sálario antes do reajuste: R$$salarioDoColaborador <br>
        porcentual do aumento foi de 5% <br>
        O valor do aumento foi de R$$valorDoAumento <br>
        novo salario: R$$reajuste");

} else {
    echo("Informe um sálario válido");
}

?>