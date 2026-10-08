<?php

// ==========================================
// 1. INTERFACE & TRAIT
// ==========================================

// Contract untuk entitas yang bisa bergerak
interface Movable {
    public function move(): void;
}

// Contract untuk entitas yang butuh bahan bakar
interface Fuelable {
    public function refuel(): void;
}

// Trait untuk meniru default method refuel() dari Java
trait DefaultFuelable {
    public function refuel(): void {
        echo "Mengisi bahan bakar umum.\n";
    }
}

// ==========================================
// 2. ABSTRACT SUPERCLASS
// ==========================================

abstract class Vehicle {
    protected string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function showInfo(): void {
        echo "Kendaraan: " . $this->name . "\n";
    }
}

// ==========================================
// 3. SUBCLASSES
// ==========================================

// Subclass: Car
class Car extends Vehicle implements Movable, Fuelable {
    use DefaultFuelable; // Menggunakan refuel() default dari trait

    public function __construct(string $name) {
        parent::__construct($name);
    }

    #[\Override]
    public function move(): void {
        echo $this->name . " bergerak di jalan raya.\n";
    }
}

// Subclass: Boat
class Boat extends Vehicle implements Movable, Fuelable {
    public function __construct(string $name) {
        parent::__construct($name);
    }

    #[\Override]
    public function move(): void {
        echo $this->name . " bergerak di air.\n";
    }

    // Override method refuel()
    #[\Override]
    public function refuel(): void {
        echo $this->name . " mengisi bahan bakar solar khusus kapal.\n";
    }
}

// Subclass: Motor
class Motor extends Vehicle implements Movable, Fuelable {
    use DefaultFuelable; // Menggunakan refuel() default dari trait

    public function __construct(string $name) {
        parent::__construct($name);
    }

    #[\Override]
    public function move(): void {
        echo $this->name . " bergerak di tanah gravel.\n";
    }
}

// Subclass: Building (tidak bergerak & tidak butuh bahan bakar)
class Building extends Vehicle {
    public function __construct(string $name) {
        parent::__construct($name);
    }
}

// ==========================================
// 4. KODE UTAMA / EKSEKUSI (Main)
// ==========================================

// Membuat objek Car, Boat, Motor, dan Building
$myCar = new Car("Mobil Sport");
$myBoat = new Boat("Perahu Motor");
$myMotor = new Motor("Motor Gravel");
$myBuilding = new Building("Gedung Tinggi");

// Menampilkan informasi dan menggerakkan kendaraan
$myCar->showInfo();
$myCar->move();
$myCar->refuel();

echo "\n"; // Pembatas antar output

$myBoat->showInfo();
$myBoat->move();
$myBoat->refuel();

echo "\n"; // Pembatas antar output

$myMotor->showInfo();
$myMotor->move();
$myMotor->refuel();

echo "\n"; // Pembatas antar output

$myBuilding->showInfo();
// $myBuilding->move();   // Tidak bisa dipanggil karena Building tidak mengimplementasikan Movable
// $myBuilding->refuel(); // Tidak bisa dipanggil karena Building tidak mengimplementasikan Fuelable

?>