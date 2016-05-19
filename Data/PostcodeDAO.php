<?php
//Data/PostCode.php
require_once 'Entities/Postcode.php';
require_once 'DBConfig.php';

class PostcodeDAO {
    public function getAll() {
        $sql = "select postcode_id, postcode, gemeente from postcodes";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $resultSet = $dbh->query($sql);
        $lijst = array();
        foreach ($resultSet as $rij) {
            $postcode = new Postcode($rij["postcode_id"], $rij["postcode"], $rij["gemeente"]);
            array_push($lijst, $postcode);
        }
        $dbh = null;
        return $lijst;
    }
    
    public function getByPostcode($postcode){
        $sql = "select postcode_id, postcode, gemeente from postcodes where postcode = :postcode";
        $dbh = new PDO (DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':postcode' => $postcode));
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $lijst = array();
        var_dump($resultSet);
        foreach($resultSet as $rij){
            $postcode = new Postcode($rij["postcode_id"], $rij["postcode"], $rij["gemeente"]);
            array_push($lijst, $postcode);
        }
        $dbh = null;
        return $lijst;        
    }
}