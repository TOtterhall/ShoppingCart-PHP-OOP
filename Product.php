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
    
    //ID
    public function getId() {
        return $this-> id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    //TITLE
    public function getTitle() {
        return $this-> title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    //PRICE
    public function getPrice() {
        return $this-> price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    //INSTOCK
    public function getInStock() {
        return $this-> inStock;
    }

    public function setInStock($inStock) {
        $this->inStock = $inStock;
    }

}

