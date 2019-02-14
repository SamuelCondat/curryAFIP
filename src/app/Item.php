<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Curry;

/**
 * Description of Item
 *
 * @author Samuel
 */
class Item {
    
    
    private $id;
    private $quantity;
    private $price;
    private $libelle;
    
    public function __construct($id, $quantity, $price, $libelle) {
        
        $this->id = $id;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->libelle = $libelle;
        
    }
    function getId() {
        return $this->id;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getPrice() {
        return $this->price;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }


}
