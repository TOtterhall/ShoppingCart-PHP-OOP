<?php

class Product
{
    
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

    
    
    
    public function getId() {
        return $this-> id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    
    public function getTitle() {
        return $this-> title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    
    public function getPrice() {
        return $this-> price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    
    public function getInStock() {
        return $this-> inStock;
    }

    public function setInStock($inStock) {
        $this->inStock = $inStock;
    }

}