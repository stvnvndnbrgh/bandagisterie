<?php
//test.php
require_once 'Data/PostcodeDAO.php';

$dao = new PostcodeDAO();
$lijst = $dao->getByPostcode(3001);
var_dump($lijst);
print("<pre>");
print_r($lijst);
print("</pre>");