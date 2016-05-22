<?php
//Entities/Klant.php

class Klant {
    
    private static $idMap= array();
    
    private $id;
    private $voornaam;
    private $familienaam;
    private $adres_id;
    private $telefoonnummer;
    private $emailadres;
    
    function __construct($id, $voornaam, $familienaam, $adres_id, $telefoonnummer, $emailadres) {
        $this->id = $id;
        $this->voornaam = $voornaam;
        $this->familienaam = $familienaam;
        $this->adres_id = $adres_id;
        $this->telefoonnummer = $telefoonnummer;
        $this->emailadres = $emailadres;
    }
    
    public static function create($id, $voornaam, $familienaam, $adres_id, $telefoonnummer, $emailadres) {
    if (!isset(self::$idMap['$id'])) {
        self::$idMap['$id'] = new Klant($id, $voornaam, $familienaam, $adres_id, $telefoonnummer, $emailadres);
    }
    
    }
    function getId() {
        return $this->id;
    }

    function getVoornaam() {
        return $this->voornaam;
    }

    function getFamilienaam() {
        return $this->familienaam;
    }

    function getAdres_id() {
        return $this->adres_id;
    }

    function getTelefoonnummer() {
        return $this->telefoonnummer;
    }

    function getEmailadres() {
        return $this->emailadres;
    }

    function setVoornaam($voornaam) {
        $this->voornaam = $voornaam;
    }

    function setFamilienaam($familienaam) {
        $this->familienaam = $familienaam;
    }

    function setAdres_id($adres_id) {
        $this->adres_id = $adres_id;
    }

    function setTelefoonnummer($telefoonnummer) {
        $this->telefoonnummer = $telefoonnummer;
    }

    function setEmailadres($emailadres) {
        $this->emailadres = $emailadres;
    }


}