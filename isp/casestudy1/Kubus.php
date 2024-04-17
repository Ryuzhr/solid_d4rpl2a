<?php
include_once "Shape2Dimension.php";
include_once "Shape3Dimension.php";

class Kubus implements Shape3Dimension, Shape2Dimension {
  
    public function calculateVolume(): void {
        echo "Menghitung volume .\n";
    }
    public function calculateArea(): void
    {
        echo "Menghitung Area";
    }

}

?>
