<?php
class Car {
    //Atributos
    public string $color;
    public int $doors;
    public int $speed;
    public bool $headlightsOn;
    public bool $manualTransmission;

    //Métodos
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setHeadlights(bool $headlights): void
    {
        $this->headlightsOn = $headlights;
    }

    public function getHeadlightsOn(): bool
    {
        return $this->headlightsOn;
    }

    public function setManualTransmission(bool $manualTransmission): void
    {
        $this->manualTransmission = $manualTransmission;
    }

    public function getManualTransmission(): bool
    {
        return $this->manualTransmission;
    }
}
