<?php

// Subclass lain dari Vehicle yang mengimplementasikan Movable dan Fuelable
class Boat extends Vehicle implements Movable, Fuelable {
    public function __construct(string $name) {
        parent::__construct($name);
    }

    // Implementasi method abstract dari Movable
    #[\Override]
    public function move(): void {
        echo $this->name . " bergerak di air.\n";
    }

    // Override method refuel dari Fuelable
    #[\Override]
    public function refuel(): void {
        echo $this->name . " mengisi bahan bakar solar khusus kapal.\n";
    }
}

?>