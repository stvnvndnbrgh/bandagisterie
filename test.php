<?php
//test.php
require_once 'Data/AdresDAO.php';
//require_once 'Data/KlantDAO.php';
//require_once 'Data/AdresDAO.php';
//require_once 'Business/AdresService.php';


$thing = new AdresDAO();
$lijst = $thing->checkIfExistsAdres('Lijstersstraat', 31, null, 'Heverlee', 'Belgie');
var_dump($lijst);
$lijst = $thing->checkIfExistsAdres('Kardinaal Mercierlaan', 31, 41, 'Heverlee', 'Belgie');
$size = sizeof($lijst);
//var_dump($size);
var_dump($lijst);
//print("<pre>");
//print_r($lijst);
//print("</pre>");
