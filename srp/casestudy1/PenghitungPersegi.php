<?php

include_once 'Persegi.php';

class PenghitungPersegi {
    public function hitungLuas(Persegi $persegi) {
        $sisi = $persegi->getSisi();
        $luas = $sisi * $sisi;
        return $luas;
    }
}

?>
