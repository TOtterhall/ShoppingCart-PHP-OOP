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

    public function increaseQuantity()
    { 
        $this-> quantity +=1;
    
        if ($this->getQuantity() > $this->getProduct()->getInStock()){
            echo "<br></br><p>Kan inte lägga till. Slut i lager</p>".$this->getProduct()->getInStock();
            

        } 

          
    }
    

}

   

// // foreach ($cart->getItems() as $item) {
// //     $cartItemName = $item->getProduct()->getTitle();
// //     $cartItemQuantity = $item->getQuantity();

// //     echo "<p>Titel: $cartItemName</p>";
// //     echo "<p>Antal: $cartItemQuantity</p>";
// //     echo "-------------------------<br><br>";
// // }
// VG: Skall utöka antalet på ett cartItem med 1. 
    // VG: Det skall inte vara möjligt att utöka så att antalet överstiger produktens $inStock.



    
    
//     if ($this->getQuantity() + $sum > $this->getProduct()->getTotalQuantity()){
//         echo("Det är för många produkter".$this->getProduct()->getTotalQuantity());
//    }
//    $this->quantity += $sum;

    // public function reduceQuantity($total=1){
    //     if ($this->getQuantity() - $total < 1){
    //        return "Minsta är 1";
    //     }
    //     $this->quantity -= $total;
    // }
//  

  
?>






