<?php

/*
Ler uma temperatura em graus Celsius e apresenta-la convertida em graus Kelvin. A fórmula para conversão é K = C + 273.15, onde K é a temperatura em Kelvin e C é a temperatura em graus Celsius.
*/

$celsius = readline ('Informe a temperatura em Celsius: ');

$kelvin = $celsius + 273.15;

echo 'A temperatura em Celsius = ',$celsius, ' e em Kelvin é ', $kelvin;