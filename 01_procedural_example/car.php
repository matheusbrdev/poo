<?php

require_once __DIR__ . '/functions.php';

$color = null;
$doors = null;
$acceleration = null;
$headlightsOn = false;
$manualTransmission = null;

showMessage([
    "Valor da variável color ANTES da função: $color",
    "Valor da variável doors ANTES da função: $doors",
    "Valor da variável acceleration ANTES da função: $acceleration",
    "Valor da variável headlightsOn ANTES da função: $headlightsOn",
    "Valor da variável manualTransmission ANTES da função: $manualTransmission"
]);

setColor($color, 'Branco');
setDoors($doors, 4);
setManualTransmission($manualTransmission, true);

//Aceleração
speedUp($acceleration);
speedUp($acceleration);
speedUp($acceleration);

turnOnHeadlights($headlightsOn);


showMessage([
    "Valor da variável color DEPOIS da função: $color",
    "Valor da variável doors DEPOIS da função: $doors",
    "Valor da variável acceleration DEPOIS da função: $acceleration",
    "Valor da variável headlightsOn DEPOIS da função: $headlightsOn",
    "Valor da variável manualTransmission DEPOIS da função: $manualTransmission"
]);


//Problema: Nada me impede de fazer isto:
$color = false;
$doors = 'Matheus';
$acceleration = -5;
$headlightsOn = 'Branco';
$manualTransmission = 10;


showMessage([
    "Valor da variável color DEPOIS da modificação: $color",
    "Valor da variável doors DEPOIS da modificação: $doors",
    "Valor da variável acceleration DEPOIS da modificação: $acceleration",
    "Valor da variável headlightsOn DEPOIS da modificação: $headlightsOn",
    "Valor da variável manualTransmission DEPOIS da modificação: $manualTransmission"
]);