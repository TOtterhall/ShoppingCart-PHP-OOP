<?php

class CartItem
{
     
    public function __construct($product, $quantity){
        $this->product = $product;
        $this->quantity = $quantity;
    
    }
    
    private $product;
    private $quantity;
    


    public function getProduct(){
        return $this->product;
    }

    public function setProduct($product) {
        $this->product = $product;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }


    public function increaseQuantity()
    { 
        $this-> quantity +=1;
    
        if ($this->getQuantity() > $this->getProduct()->getInStock()){
            echo "<br></br><p>Kan inte lägga till. Slut i lager</p>".$this->getProduct()->getInStock();
        }      
    }
}
  
?>