<?php

/*
Ler uma temperatura em graus Celsius e exibi-la convertida em graus Fahrenheit. A fórmula de conversão a ser utilizada é F = ( 9 * C + 160 ) / 5, em que a variável F representa a temperatura em graus Fahrenheit e a variável C a temperatura em graus Celsius.
*/

$celsius = readline ('Informe a temperatura em Celsius: ');

$fahrenheit = (9 * $celsius + 160)/5;

echo 'A temperatura em Celsius = ',$celsius, ' e em Fahrenheit é ', $fahrenheit;