<?php
//Entities/Postcode.php

class Postcode {
    private $id;
    private $postcode;
    private $gemeente;
    
    function __construct($id, $postcode, $gemeente) {
        $this->id = $id;
        $this->postcode = $postcode;
        $this->gemeente = $gemeente;
    }
    
    public static function create($id, $postcode, $gemeente){
        if(!isset(self::$idMap[$id])) {
            self::$idMap[$id] = new Postcode($id, $postcode, $gemeente);
        }
        return self::$idMap[$id];
    }
            
    function getId() {
        return $this->id;
    }

    function getPostcode() {
        return $this->postcode;
    }

    function getGemeente() {
        return $this->gemeente;
    }

    function setPostcode($postcode) {
        $this->postcode = $postcode;
    }

    function setGemeente($gemeente) {
        $this->gemeente = $gemeente;
    }
}