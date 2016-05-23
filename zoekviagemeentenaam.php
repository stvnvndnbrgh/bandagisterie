<?php
//zoekviagemeentenaam.php
require_once 'Business/PostcodeService.php';

if (isset($_GET['action']) && $_GET['action'] == "zoek"){
    $postSvc = new PostcodeService();
    $lijst = $postSvc->getPostcodeByGemeentenaam($_POST['gemeente']);
    include("Presentation/postcodeViaGemeentenaam.php");
}else{
    include("Presentation/postcodeViaGemeentenaam.php");
}