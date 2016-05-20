<?php
//Business/PostcodeService.php
require_once 'Data/PostcodeDAO.php';

class PostcodeService {
    public function getPostcodeOverzicht() {
        $postcodeDAO = new PostcodeDAO();
        $lijst = $postcodeDAO->getAll();
        return $lijst;
    }
}
