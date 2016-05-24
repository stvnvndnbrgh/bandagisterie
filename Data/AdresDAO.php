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
        $sql = "select adres_id, straat, huisnummer, busnummer, adressen.postcode_id, postcode, gemeente, land from adressen, postcodes where adres_id = :id and adressen.postcode_id = postcodes.postcode_id";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $lijst = array();
        foreach($resultSet as $rij) {
            $postcode = Postcode::create($rij['postcode_id'], $rij['postcode'], $rij['gemeente']);
            $adres = Adres::create($rij['adres_id'], $rij['straat'], $rij['huisnummer'], $rij['busnummer'], $postcode, $rij['land']);
            array_push($lijst, $adres);
        }
        $dbh = null;
        return $lijst;
    }
    
    public function checkIfExistsAdres($straat, $huisnummer, $busnummer, $gemeente, $land) {
        $sql ="select adres_id from adressen where straat = :straat and huisnummer = :huisnummer and busnummer = :busnummer and postcode_id = (select postcode_id from postcodes where gemeente = :gemeente) and land = :land";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $lijst = array();
        $busleeg = 'IS NULL';
        $stmt = $dbh->prepare($sql);
        if ($busnummer != null){
            $stmt->execute(array('straat' => $straat, ':huisnummer' => $huisnummer, ':busnummer' => $busnummer, ':gemeente' => $gemeente, ':land' => $land));
        }else{
            $stmt->execute(array('straat' => $straat, ':huisnummer' => $huisnummer, ':busnummer' => $busleeg, ':gemeente' => $gemeente, ':land' => $land));
        }
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($resultSet as $rij) {
            array_push($lijst, $rij);
        }
        if (sizeof($lijst) > 0){
            return true;
        }else{
            return false;
        }
    }
}
