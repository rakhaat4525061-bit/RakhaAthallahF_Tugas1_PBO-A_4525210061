<?php

// Interface yang menentukan kontrak bahwa kendaraan bisa bergerak
interface Movable {
    public function move(): void; // Semua kelas yang mengimplementasikan harus memiliki method move()
}

?>