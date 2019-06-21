<?php

$stmt;

class h_database { 


    public function __construct() {
       $stmt = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die("er ging iets fout bij het verbinding maken met de database, misschien is de configuratie niet goed ingesteld in de constants.");
    }
}
?>