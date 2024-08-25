<?php
$imc = readline("Coloque o seu IMC: ");
$peso = ["Magreza", "Saudável", "Sobrepeso", "Obesidade Grau I", "Obesidade Grau II", "Obesidade Grau III"];

$faixaImc = [18.5, 18.51, 24.9, 25.0, 29.9, 30.0, 34.9, 35.0, 39.9]; 

for($i = 0; $i < count($faixaImc); $i++) {
    if ($imc <= $faixaImc[0]) {
        echo "Atenção, seu IMC é $imc, e você está classificado como $peso[0]";
        break;
    } elseif ($imc >= $faixaImc[1] && $imc <= $faixaImc[2] ) {
        echo "Atenção, seu IMC é $imc, e você está classificado como $peso[1]";
        break;
    } elseif ($imc >= $faixaImc[3] && $imc <= $faixaImc[4]) {
        echo "Atenção, seu IMC é $imc, e você está classificado como $peso[2]";
        break;
    } elseif ($imc >= $faixaImc[5] && $imc <= $faixaImc[6]) {
        echo "Atenção, seu IMC é $imc, e você está classificado como $peso[3]";
        break;
    } elseif ($imc >= $faixaImc[7] && $imc <= $faixaImc[8]) {
        echo "Atenção, seu IMC é $imc, e você está classificado como $peso[4]";
        break;
    } elseif ($imc > $faixaImc[8]) {
        echo "Atenção, seu IMC é $imc, e você está classificado como $peso[5]";
        break;
    }
}
?>