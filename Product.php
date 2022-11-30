<?php

class Product
{
    // TODO Skriv en konstruktor som sätter alla properties
    public function __construct($id,$title,$price,$inStock)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this-> inStock= $inStock;
        
    }

    private $id;
    private $title;
    private $price;
    private $inStock;

    // TODO Skriv getters för alla properties
    //SETTERS????//T.O
    
    //ID
    public function getid() {
        return $this-> id;
    }

    public function setid($id) {
        $this->id = $id;
    }

    //TITLE
    public function gettitle() {
        return $this-> title;
    }

    public function settitle($title) {
        $this->title = $title;
    }

    //PRICE
    public function getprice() {
        return $this-> price;
    }

    public function setprice($price) {
        $this->price = $price;
    }

    //INSTOCK
    public function getinStock() {
        return $this-> inStock;
    }

    public function setinStock($inStock) {
        $this->inStock = $inStock;
    }

    
}