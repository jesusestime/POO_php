<?php

class Cart
{
    public int $quantity;
    public float $totalprice;

    public function __construct($quantity,$totalprice)
    {
        $this->quantity=$quantity;
        $this->totalprice=$totalprice;
    }
    public function gettotalprice():float{
        return $this->totalprice;
    }
    public function settotalprice($totalprice):void
    {
       $this->totalprice=$totalprice;  
    }
    public function discount(float $discount):float
    {
       return ($this->totalprice=$this->totalprice-($this->totalprice*($discount/100)));  
    }
    
}