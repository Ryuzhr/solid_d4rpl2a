<?php
include_once "DBMS.php";

class DBMSConnection {    
    public function connect($dbms) {
        $dbms->createConnection();
    }
}
?>
