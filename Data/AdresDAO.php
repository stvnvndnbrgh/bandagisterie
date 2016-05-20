<?php
//Data/AdresDAO.php

require_once 'Entities/Postcode.php';
require_once 'Entities/Adres.php';
require_once 'DBConfig.php';

class AdresDAO{
    public function getAll() {
        $sql = "select adres_id, straat, huisnummer, busnummer, adressen.postcode_id, postcode, gemeente, land from adressen, postcodes where adressen.postcode_id = postcodes.postcode_id";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $resultSet = $dbh->query($sql);
        $lijst = array();
        foreach ($resultSet as $rij) {
            $postcode = Postcode::create($rij['postcode_id'], $rij['postcode'], $rij['gemeente']);
            $adres = Adres::create($rij['adres_id'], $rij['straat'], $rij['huisnummer'], $rij['busnummer'], $postcode, $rij['land']);
            array_push($lijst, $adres);
        }
        $dbh = null;
        return $lijst;
    }
    
    public function getById($id) {
        $sql = "adres_id, straat, huisnummer, busnummer, adressen.postcode_id, postcode, gemeente, land from adressen, postcodes where adres_id = :id and adressen.postcode_id = postcodes.postcode_id";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $lijst = array();
        foreach($resultSet as $rij) {
            
        }
    }
}