<?php


class Cart 
{   
       // TODO Skriv en konstruktor som sätter alla properties

    private array $items = [];


    public function getItems() {
        return $this-> items;
    }

    
    public function setItems($items) {
        return $this ->items = $items;
    }



  

    public function addProduct($product, $quantity) {
        $items= [$product->getId()];
        $cartItem = $items [$product->getId()] ?? null;
    
        if($cartItem === null){
            $cartItem = new CartItem($product, 0);
            $this->items [$product->getId()] = $cartItem;
           
        }
        
        $cartItem->increaseQuantity();
        return $cartItem;

    } 
    
    
    //Skall ta bort en produkt ur kundvagnen (använd unset())
    public function removeProduct($product)
    {   
        unset($this->items[$product->getId()]);
    }

    //Skall returnera totala antalet produkter i kundvagnen
    //OBS: Ej antalet unika produkter
    public function getTotalQuantity()
    {
        $sum = 0;
        foreach($this->items as $item) {
            $sum += $item->getQuantity();
        }
        return $sum;
    }

    //Skall räkna ihop totalsumman för alla produkter i kundvagnen
    //VG: Tänk på att ett cartitem kan ha olika quantity
    public function getTotalSum()
    {
        $totalSum = 0;
        foreach($this->items as $item) {
            $totalSum += $item -> getQuantity() * $item->getProduct()->getPrice();
        }
        return $totalSum;
    }
    
}

?>