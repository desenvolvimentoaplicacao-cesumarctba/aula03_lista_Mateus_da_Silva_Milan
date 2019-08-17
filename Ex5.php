<?php

/*
Ler uma temperatura em graus Fahrenheit e apresentá-la convertida em Kelvin. Para conversão deve-se primeiro converter em graus Celsius conforme exercício anterior, e depois converter em Kelvin.
*/

$fahrenheit = readline ('Informe a temperatura em Fahrenheit: ');

$celsius = (($fahrenheit - 31) * 5) / 9;

$kelvin = $celsius + 273.15;

echo 'A temperatura em Fahrenheit: ' , $fahrenheit .PHP_EOL;
echo 'A temperatura em Celsius: ' , $celsius .PHP_EOL;
echo 'A temperatura em Kelvin: ' , $kelvin;
