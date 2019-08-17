<?php

/*
Crie um programa que calcule o IMC de uma pessoa e de a classificação ao final da execução do script.
*/

$altura = readline ('Informe a altura: ');
$peso = readline ('Informe o peso: ');
$altimc = ($altura * $altura);
$imc = ($peso / $altimc);

echo 'O seu IMC é de ' ,$imc;

if ($imc < 18.5) {
  echo 'Abaixo do peso';}
if (($imc >= 18.5) && ($imc <= 24.9)) {
  echo 'Peso normal';}
if (($imc >= 25) && ($imc <= 29.9)) {
  echo 'Sobrepeso';}
if (($imc >= 30) && ($imc <= 34.9)) {
  echo 'Obesidade grau 1';}
if (($imc >= 35) && ($imc <= 39.9)) {
  echo 'Obesidade grau 2';}
if ($imc > 40) {
  echo 'Obesidade grau 3';}