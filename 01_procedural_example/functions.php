<?php

require_once __DIR__ . '/../helpers.php';

//Passagem por referência

function setColor(&$color, string $colorArgument): void {
    $color = $colorArgument;
}

function setDoors(&$doors, int $doorsArgument): void {
    $doors = $doorsArgument;
}

function setManualTransmission(&$manualTransmission, bool $value): void {
    $manualTransmission = $value;
}

function speedUp(&$acceleration): void {
    $acceleration += 5;
}

function brake(&$acceleration): void {
    $acceleration = 0;
}

function turnOnHeadlights(&$headlightsOn): void {
    $headlightsOn = true;
}