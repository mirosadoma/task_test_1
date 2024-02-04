<?php

namespace Task1\Models;

use Exception;

class Order
{
    protected $products = [];
    protected $user;
    protected $shipping;
    protected $invoice_number;
    protected $status;
    protected $tax;
    protected $price;
    protected $is_done;
    private $statusChange;

    public function getProducts()
    {
        return $this->products;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function getShipping()
    {
        return $this->shipping;
    }
    public function getInvoiceNumber()
    {
        return $this->invoice_number;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getTax()
    {
        return $this->tax;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getIsDone()
    {
        return $this->is_done;
    }
    
    public function setProducts($products)
    {
        return $this->products = $products;
    }
    public function setUser($user)
    {
        return $this->user = $user;
    }
    public function setShipping($shipping)
    {
        return $this->shipping = $shipping;
    }
    public function setInvoiceNumber($invoice_number)
    {
        return $this->invoice_number = $invoice_number;
    }
    public function setStatus($status)
    {
        return $this->status = $status;
    }
    public function setTax($tax)
    {
        return $this->tax = $tax;
    }
    public function setPrice($price)
    {
        return $this->price = $price;
    }
    public function setIsDone($is_done)
    {
        return $this->is_done = $is_done;
    }

    public function changeStatus($status, $extra = false)
    {
        $strategyClassName = '\\Task1\\Services\\Orders\\' . ucfirst($status) . 'Status';
        if (!class_exists($strategyClassName)) {
            throw new Exception("Invalid status provided: " . $status);
        }
        $this->statusChange = new $strategyClassName();
        $this->statusChange->execute($this, $extra);
    }

    public function calculateTotalPrice()
    {
        $totalPrice = 0;
        $this->setPrice(0);
        foreach ($this->products as $product) {
            $totalPrice += $product->calculatePrice();
            $this->setPrice($totalPrice);
        }
    }

    public function applyExtraTax()
    {
        $tax = $this->getTax() * 2;
        $tax = $tax + ($this->getPrice() * $tax);
        $price = $this->getPrice();
        if ($tax == 0){
            $_tax = 1;
            $price *= $_tax;
            $this->setPrice($price);
        }
    }

    public function applyShippingCostAndTax()
    {
        $price = $this->getPrice();
        $tax = $this->getTax() + $this->getShipping()->calculateTax($this->getUser()->getAddress());
        $price += $tax + $this->getShipping()->getCost() ;
        $this->setPrice($price);
    }

    public function printReceipt()
    {
        if ($this->getStatus() !== 'delivering') {
            throw new Exception("internal error because the status is : ".$this->getStatus()." not is delivering");
        }

        $receipt = "total price : " . $this->getPrice() . " #|# ";
        $receipt .= "user name : " . $this->getUser()->getName() . " #|# ";

        foreach ($this->getProducts() as $product) {
            $receipt .= "product name : " . $product->getName() . " ";
            $receipt .= "category : " . $product->getCategory() . " ";
            $receipt .= "price : " . $product->getPrice() . "";

            foreach ($product->getAttributes() as $key => $attribute) {
                $receipt .= " #|# " . $key . " " . $attribute;
            }
        }

        return $receipt;
    }
}