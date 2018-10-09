<?php
$input = array_map("floatval", explode(' ', readline()));
$car = new Car($input[0], $input[1], $input[2]);

$input = explode(' ', readline());

while ($input[0] != 'END') {
    $command = $input[0];
    if (count($input) > 1) {
        $amount = floatval($input[1]);
    }

    switch ($command) {
        case 'Travel':
            $car->travel($amount);
            break;
        case 'Refuel':
            $car->refuel($amount);
            break;
        case 'Distance':
            $distance = $car->getDistance();
            echo "Total Distance: $distance".PHP_EOL;
            break;
        case 'Time':
            $time = $car->getTime();
            echo "Total Time: $time".PHP_EOL;
            break;
        case 'Fuel':
            $fuel = $car->getFuel();
            echo "Fuel left: $fuel liters".PHP_EOL;
            break;
    }
    $input = explode(' ', readline());
}


class Car {
    private $speed;
    private $fuel;
    private $fuelEconomy;
    private $distanceTraveled;
    private $timeTraveled;

    /**
     * Car constructor.
     * @param $speed
     * @param $fuel
     * @param $fuelEconomy
     */
    public function __construct(float $speed, float $fuel, float $fuelEconomy)
    {
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->fuelEconomy = $fuelEconomy;
        $this->distanceTraveled = 0;
        $this->timeTraveled = 0;
    }

    public function travel(float $distance) {
        if ($this->fuelEconomy * $distance / 100 >= $this->fuel) {
            $this->distanceTraveled += $this->fuel / $this->fuelEconomy * 100;
            $this->timeTraveled = ($this->fuel / $this->fuelEconomy * 100) / $this->speed;
            $this->fuel = 0;
        } else {
            $this->distanceTraveled += $distance;
            $this->fuel -= ($distance / 100) * $this->fuelEconomy;
            $this->timeTraveled += $distance/$this->speed;
        }
    }

    public function refuel (float $addedFuel) {
        $this->fuel += $addedFuel;
    }

    public function getDistance() {
        $distanceFormatted = number_format(round($this->distanceTraveled, 1), 1);
        return $distanceFormatted;
    }

    public function getTime() {
        $hoursTraveled = floor($this->timeTraveled);
        $minutesTraveled = floor(($this->timeTraveled - $hoursTraveled) * 60);
        return "$hoursTraveled hours and $minutesTraveled minutes";
    }

    public function getFuel() {
        $fuelFormatted = number_format(round($this->fuel, 1), 1);
        return $fuelFormatted;
}

}