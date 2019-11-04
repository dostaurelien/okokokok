<?php
require_once 'vehicle.php';

Class Truck extends Vehicle {

    private $energyLevel;
    private $energy;
    private $capacityStockage;
    private $loading=0;
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(int $capacityStockage, string $color, int $nbSeats, string $energy )
    {
        parent::__construct($color, $nbSeats);
        $this->capacityStockage = $capacityStockage;
        $this->energy = $energy;
    }

    // Function GET/SET nbWheels
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function setNbWheels (int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    // Function GET/SET CurrentSpeed
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed < 0) {
            return;
        }
        $this->currentSpeed = $currentSpeed;
    }

    // Function GET/SET Color
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor (string $color): void
    {
        $this->color = $color;
    }

    // Function GET/SET nbSeats
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function setNbSeats (int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    // Function GET/SET energy
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy (string $energy): void
    {
        $this->energy = $energy;
    }

    // Function GET/SET energyLevel
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel (int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    // Function GET/SET capacityStockage
    public function getcapacityStockage(): int
    {
        return $this->capacityStockage;
    }
    public function setcapacityStockage(int $capacityStockage): void
    {
        $this->capacityStockage = $capacityStockage;
    }

    // Function GET/SET loading
    public function getloading(): string
    {
        return $this->loading;
    }
    public function setloading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function A()
    {
        if ($this->loading < $this->capacityStockage)
            return 'in filling';
        else
            return 'full';
    }

}
