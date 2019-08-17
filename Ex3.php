<?php

/*
Ler uma temperatura em graus Fahrenheit e apresenta-la convertida em graus Celsius. A fórmula de conversão a ser utilizada é C = (( F – 32 ) * 5) / 9, em que a variável F representa a temperatura em graus Fahrenheit e a variável C a temperatura em graus Celsius.
*/

$fahrenheit = readline ('Informe a temperatura em Fahrenheit: ');

$celsius = (($fahrenheit - 32) *5)/9;

echo 'A temperatura em Fahrenheit = ',$fahrenheit, ' e em Celsius é ', $celsius;