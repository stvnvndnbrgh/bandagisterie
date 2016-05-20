<?php
//Business/AdresService.php

require_once 'Data/AdresDAO.php';

class AdresService{
    
    public function getAdressenOverzicht() {
        $adresDAO = new AdresDAO();
        $lijst = $adresDAO->getAll();
        return $lijst;
        var_dump($lijst);
    }
}