<?php
//test.php
require_once 'Data/PostcodeDAO.php';
require_once 'Data/AdresDAO.php';

$dao = new AdresDAO();
$lijst = $dao->getAll();
var_dump($lijst);
print("<pre>");
print_r($lijst);
print("</pre>");