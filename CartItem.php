<?php
// TODO Skriv en konstruktor som sätter alla properties
class CartItem
{
    //I denna konstruktorn måste vi ge ALLA värden. 
    public function __construct($product, $quantity){
        $this->product = $product;
        $this->quantity = $quantity;
    
    }
    
    private $product;
    private $quantity;
    

    // TODO Skriv getters för alla properties
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



    // VG: Skall utöka antalet på ett cartItem med 1. 
    // VG: Det skall inte vara möjligt att utöka så att antalet överstiger produktens $inStock.

    public function increaseQuantity($number=1)
    {
    
        if ($this->getQuantity() + $number > $this->getProduct()->getInStock()){
            echo "Kan inte lägga till. Slut i lager".$this->getProduct()->getInStock();
            

        } else {
            
            $this->quantity += $number;
        }

          
    }
    

}

   


  
?>






