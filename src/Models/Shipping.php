<?php

namespace Task1\Models;

use Task1\Models\Address;

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

    public function calculateTax(Address $address){
        if ($this->getName() == 'aramex'){
            if ($address->getCountry() == 'egypt'){
                return $this->getTax() + .14;
            }
            elseif ($address->getCountry() == 'kuwait'){
                return $this->getTax() + .1;
            }
        }
        elseif($this->getName() == 'fedex'){
            if ($address->getCountry() == 'egypt'){
                return $this->getTax() + .20;
            }
            elseif ($address->getCountry() == 'kuwait'){
                return $this->getTax() + .13;
            }
        }
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