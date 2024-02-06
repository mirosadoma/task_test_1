<?php

namespace Task1\Models;

use Task1\Models\Address;
use Task1\Services\Address\TaxCalculatorFactory;

class Shipping
{
    protected $name;
    protected $cost;
    protected $tax;

    public function getName()
    {
        return $this->name;
    }
    public function getCost()
    {
        return $this->cost;
    }
    public function getTax()
    {
        return $this->tax;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }
    public function setCost($cost)
    {
        return $this->cost = $cost;
    }
    public function setTax($tax)
    {
        return $this->tax = $tax;
    }

    public function calculateTax(Address $address, $shippingMethod) {
        $taxCalculator = TaxCalculatorFactory::create($shippingMethod->getName(), $address);
        return $this->getTax() + $taxCalculator;
    }

    public function create() {
        $shipping = new self();
        $shipping->setName('aramex');
        $shipping->setTax(13);
        $shipping->setCost(10);
        return $shipping;
    }

    public function notify($message){
        /**
         * TODO
         * we need to add channel to send notification to shipping company but not now
         */
    }
}