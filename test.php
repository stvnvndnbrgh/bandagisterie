<?php
//test.php
require_once 'Data/PostcodeDAO.php';

$dao = new PostcodeDAO();
$lijst = $dao->getByGemeente("mechelen");
var_dump($lijst);
print("<pre>");
print_r($lijst);
print("</pre>");