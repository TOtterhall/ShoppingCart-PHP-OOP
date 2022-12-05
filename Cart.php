<?php


class Cart 
{   
 
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
    
    
    public function removeProduct($product)
    {   
        unset($this->items[$product->getId()]);
    }


    public function getTotalQuantity()
    {
        $sum = 0;
        foreach($this->items as $item) {
            $sum += $item->getQuantity();
        }
        return $sum;
    }


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