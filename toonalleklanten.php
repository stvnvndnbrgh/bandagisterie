<?php
//toonalleklanten.php
require_once 'Business/KlantService.php';

$klantSvc = new KlantService();
$klantenLijst = $klantSvc->getKlantOverzicht();
include 'Presentation/klantenOverzicht.php';
