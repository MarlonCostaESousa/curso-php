<?php

$peso = 60;
$altura = 1.74;
$imc = $peso / $altura ** 2;

echo "Seu imc é $imc. Você esta com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomandado" . PHP_EOL;