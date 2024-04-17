<?php
include_once "TipePembayaran.php";
class PembayaranCustomer {
    
    public function menerimaPembayaran($tipePembayaran) {
       
        $tipePembayaran->memprosesPembayaran();
    }
}

?>
