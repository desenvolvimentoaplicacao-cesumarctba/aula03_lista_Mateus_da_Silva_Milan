<?php

/*
Ler uma temperatura em graus Celsius e exibi-la convertida em graus Fahrenheit. A fórmula de conversão a ser utilizada é F = ( 9 * C + 160 ) / 5, em que a variável F representa a temperatura em graus Fahrenheit e a variável C a temperatura em graus Celsius.
*/

$tempo = readline ('Informe o tempo em horas gasto na viagem: ');
$vlmedia = readline ('Informe a velocidade média: ');

$distancia = ($tempo * $vlmedia);

echo 'A distancia percorrida é de : ' ,$distancia, ' KM' .PHP_EOL;

$litros_usados = ($distancia/12);

echo 'O total de litros usados é: ',$litros_usados;

