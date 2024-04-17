<?php


require_once 'FiturCetak.php';

class PrinterEntryLevel implements FiturCetak {

    public function cetakKertas(): void {
        echo "Mencetak kertas di printer entry level";
        echo "<br>";
    }
}

?>
