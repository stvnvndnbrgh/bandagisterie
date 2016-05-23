<?php
//zoekviapostcode.php
require_once 'Business/PostcodeService.php';

if (isset($_GET['action']) && $_GET['action'] == "zoek"){
    $postScv = new PostcodeService();
    $lijst = $postScv->getGemeenteByPostcode($_POST['postcode']);
    if (sizeof($lijst) == 1) {
        $_GET['paske']= $lijst;
        include("Presentation/gemeenteViaPostcode.php");
        exit(0);
    }elseif(sizeof($lijst) > 1){
        $_GET['paske']= $lijst;
        include("Presentation/gemeenteViaPostcode.php");
        exit(0);
    }      
}else{
    include("Presentation/gemeenteViaPostcode.php");
}
