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
}