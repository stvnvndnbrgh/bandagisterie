<?php
//test.php
require_once 'Data/PostcodeDAO.php';

$dao = new PostcodeDAO();
$lijst = $dao->getAll();
print ("<pre>");
print_r ($lijst);
print ("</pre>");