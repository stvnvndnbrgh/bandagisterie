<?php
//Entities/Adres.php

class Adres {
    
    private static $idMap= array();
    
    private $id;
    private $straat;
    private $huisnummer;
    private $busnummer;
    private $postcode_id;
    private $land;
    
    function __construct($id, $straat, $huisnummer, $busnummer, $postcode_id, $land) {
        $this->id = $id;
        $this->straat = $straat;
        $this->huisnummer = $huisnummer;
        $this->busnummer = $busnummer;
        $this->postcode_id = $postcode_id;
        $this->land = $land;
    }
    
    public static function create($id, $straat, $huisnummer, $busnummer, $postcode_id, $land) {
        if (!isset(self::$idMap[$id])) {
            self::$idMap[$id] = new Adres($id, $straat, $huisnummer, $busnummer, $postcode_id, $land);            
        }
        return self::$idMap[$id];
    }   
            
    function getId() {
        return $this->id;
    }

    function getStraat() {
        return $this->straat;
    }

    function getHuisnummer() {
        return $this->huisnummer;
    }

    function getBusnummer() {
        return $this->busnummer;
    }

    function getPostcode_id() {
        return $this->postcode_id;
    }

    function getLand() {
        return $this->land;
    }

    function setStraat($straat) {
        $this->straat = $straat;
    }

    function setHuisnummer($huisnummer) {
        $this->huisnummer = $huisnummer;
    }

    function setBusnummer($busnummer) {
        $this->busnummer = $busnummer;
    }

    function setPostcode_id($postcode_id) {
        $this->postcode_id = $postcode_id;
    }

    function setLand($land) {
        $this->land = $land;
    }
}


