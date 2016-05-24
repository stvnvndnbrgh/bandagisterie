<?php
//test.php
//require_once 'Data/PostcodeDAO.php';
require_once 'Data/KlantDAO.php';
//require_once 'Data/AdresDAO.php';
//require_once 'Business/AdresService.php';


$thing = new KlantDAO();
$lijst = $thing->getAll();
$size = sizeof($lijst);
//var_dump($size);
var_dump($lijst);
//print("<pre>");
//print_r($lijst);
//print("</pre>");
