<?php
//Data/KlantDAO.php

require_once 'Entities/Klant.php';
require_once 'Entities/Postcode.php';
require_once 'Entities/Adres.php';
require_once 'DBConfig.php';

class KlantDAO{
    public function getAll() {
        $sql = "SELECT
            klanten.klant_id,
            klanten.klant_naam,
            klanten.klant_achternaam,
            klanten.klant_adres_id,
            adressen.straat,
            adressen.huisnummer,
            adressen.busnummer,
            adressen.postcode_id,
            postcodes.postcode,
            postcodes.gemeente,
            adressen.land,
            klanten.klant_tlfnr,
            klanten.klant_email,
            klanten.klant_geboortedatum,
            klanten.klant_rijksregnr
            FROM
                    (klanten
            LEFT JOIN
                    adressen
            ON
                    klanten.klant_adres_id = adressen.adres_id)
            LEFT JOIN
                    postcodes
            ON
                    adressen.postcode_id = postcodes.postcode_id;";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $resultSet = $dbh->query($sql);
        $lijst = array();
        foreach ($resultSet as $rij){
            $postcode = Postcode::create($rij['postcode_id'], $rij['postcode'], $rij['gemeente']);
            $adres = Adres::create($rij['klant_adres_id'], $rij['straat'], $rij['huisnummer'], $rij['busnummer'], $postcode, $rij['land']);
            $klant = Klant::create($rij['klant_id'], $rij['klant_naam'], $rij['klant_achternaam'], $adres, $rij['klant_tlfnr'], $rij['klant_email']);
            array_push($lijst, $klant);
        }
        $dbh = null;
        return $lijst;
    }
    
    public function createKlant($vn, $fn, $straat, $huisnummer, $busnummer, $gemeente, $land, $telefoonnummer, $email) {
        $sql = "select postcode_id from postcodes where gemeente = :gemeente";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':gemeente' => $gemeente));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        $postcode = Postcode::create($rij['postcode_id'], $rij['postcode'], $rij['gemeente']);
        $adresDAO = new AdresDAO();
    }
}