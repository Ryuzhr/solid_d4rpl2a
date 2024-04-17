<?php


require_once 'FiturCetak.php';
require_once 'FiturScan.php';


class PrinterMidRange implements FiturCetak, FiturScan {

    public function cetakKertas(): void {
        echo "Mencetak kertas di printer mid-range...\n";
    }


    public function scanKertas(): void {
        echo "Menggunakan fitur scan di printer mid-range...\n";
    }
}

?>
