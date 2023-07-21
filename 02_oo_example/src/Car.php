<?php

class Car 
{
    private string $color;
    public readonly int $doors;
    public readonly string $model;
    private int $speed;
    private bool $headlightsOn;
    public readonly bool $manualTransmission;

    public function __construct(string $color, int $doors, bool $manualTransmission)
    {
        if($doors <= 0) {
            throw new DomainException("O número de portas não pode ser menor ou igual a 0");
        }

        $this->color = $color;
        $this->doors = $doors;
        $this->manualTransmission = $manualTransmission;
        $this->speed = 0;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getColor(): string 
    {
        return $this->color;
    }

    public function getDoors(): int 
    {
        return $this->doors;
    }

    public function speedUp(): self 
    {
        $this->speed += 5;

        return $this;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function brake(): self 
    {
        $this->speed = 0;

        return $this;
    }

    public function turnOnHeadlights(): self 
    {
        $this->headlightsOn = true;

        return $this;
    }

    public function headlightsStatus(): bool 
    {
        return $this->headlightsOn;
    }
}