<?php


class Cart
{   
   
    private array $items = [];


    public function getItems() {
        echo $this-> items;
    }

    public function setItems($items) {
        echo $this ->items = $items;
    }

    public function addProduct($product, $quantity) {   
        $cartItem = $this->findItem($product->getId());
        if($cartItem === null){
            $cartItem = new CartItem($product, $quantity);
            $this->items [$product->getId()] = $cartItem;
        }     
        
        $cartItem->increaseQuantity($quantity);//????????????ÄNDRA ! TILL =0 ovan
        return $cartItem;
    }

    private function findItem($productId)
    {   
        return $this->items[$productId] ?? null;
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