<?php
$valorGanhoHoras = $_POST ["valorGanhoHoras"];
$horasTrabalhadasMensal = $_POST ["horasTrabalhadasMensal"];
$salarioBruto = $valorGanhoHoras * $horasTrabalhadasMensal;

$sindicato = $salarioBruto * 0.03;
$FGTS = $salarioBruto * 0.08;

$impostoRenda1 = $salarioBruto * 0.075;
$impostoRenda2 = $salarioBruto * 0.15;
$impostoRenda3 = $salarioBruto * 0.224;

$salarioLiquido1 = $salarioBruto - ($impostoRenda1 + $sindicato + $FGTS);
$salarioLiquido2 = $salarioBruto - ($impostoRenda2 + $sindicato + $FGTS);
$salarioLiquido3 = $salarioBruto - ($impostoRenda3 + $sindicato + $FGTS);

if($salarioBruto < 1500){
   echo "Seu salario é de R$ $salarioBruto <br> 
   O desconto do imposto de renda é R$ $impostoRenda1 <br> 
   O desconto do sindicato é de $sindicato <br>
   O desconto do FGTS é de R$ $FGTS <br> 
   O sálario atual é de R$ $salarioLiquido1";

}else if($salarioBruto > 1500 && $salarioBruto < 2500){
    echo "Seu salario é de R$ $salarioBruto <br> 
   O desconto do imposto de renda é R$ $impostoRenda2 <br> 
   O desconto do sindicato é de $sindicato <br>
   O desconto do FGTS é de R$ $FGTS <br> 
   O sálario atual é de R$ $salarioLiquido2";
}else if($salarioBruto > 2500){
    echo "Seu salario é de R$ $salarioBruto <br> 
   O desconto do imposto de renda é R$ $impostoRenda3 <br> 
   O desconto do sindicato é de $sindicato <br>
   O desconto do FGTS é de R$ $FGTS <br> 
   O sálario atual é de R$ $salarioLiquido3";

}else if($salarioBruto < 2259.20){
    echo"Você está isento ";
}
?>