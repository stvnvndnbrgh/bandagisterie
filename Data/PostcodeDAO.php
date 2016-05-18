<?php
//Data/PostCode.php
require_once 'Entities/Postcode.php';
require_once 'DBConfig.php';

class Postcode {
    public function getAll() {
        $sql = "select postcode, gemeente from postcodes";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $resultSet = $dbh->query($sql);
        $lijst = array();
        foreach ($resultSet as $rij) {
            $postcode = new Postcode($rij["id"], $rij["postcode"], $rij["gemeente"]);
            array_push($lijst, $postcode);
        }
        $dbh = null;
        return $lijst;
    }
}