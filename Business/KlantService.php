<?php
//Business/KlantService.php

require_once 'Data/KlantDAO.php';

class KlantService{
    
    public function getKlantOverzicht(){
        $klantDAO = new KlantDAO();
        $lijst = $klantDAO->getAll();
        return $lijst;
        var_dump($lijst);
    }
}