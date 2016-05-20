<?php
//zoekviapostcode.php
require_once 'Business/PostcodeService.php';

if (isset($_GET['action']) && $_GET['action'] == "zoek"){
    $postScv = new PostcodeService();
    $postScv->getGemeenteByPostcode($_POST['postcode']);
    var_dump($lijst);
    if (sizeof($lijst) == 1) {
        header("location: Presentation/gemeenteViaPostcode.php?action=toon");
        exit(0);
    }else{
        header("location: Presentation/gemeenteViaPostcode.php?action=toonalles");
    }
}