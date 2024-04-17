<?php


require_once 'FiturFax.php';
require_once 'FiturCetak.php';
require_once 'FiturScan.php';


class PrinterFlagship implements FiturFax, FiturCetak, FiturScan {
  
    public function terimaFax(): void {
        echo "Menerima fax di printer flagship";
        echo "<br>";
    }


    public function cetakKertas(): void {
        echo "Mencetak kertas di printer flagship";
        echo "<br>";
    }

   
    public function scanKertas(): void {
        echo "Menggunakan fitur scan di printer flagship";
    }
}

?>
