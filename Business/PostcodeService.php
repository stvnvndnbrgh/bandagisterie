<?php
//Business/PostcodeService.php
require_once 'Data/PostcodeDAO.php';

class PostcodeService {
    public function getPostcodeOverzicht() {
        $postcodeDAO = new PostcodeDAO();
        $lijst = $postcodeDAO->getAll();
        return $lijst;
    }
    
    public function getGemeenteByPostcode($postcode) {
        $postcodeDAO = new PostcodeDAO();
        $lijst = $postcodeDAO->getByPostcode($postcode);
        return $lijst;
    }
    
    public function getPostcodeByGemeentenaam($gemeente){
        $postcodeDAO = new PostcodeDAO();
        $lijst = $postcodeDAO->getByGemeente($gemeente);
        return $lijst;
    }
}
