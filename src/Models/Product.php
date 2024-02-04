<?php

namespace Task1\Models;

use Exception;

class Product
{
    protected $name;
    protected $quantity;
    protected $category;
    protected $attributes;
    protected $price;

    public function getName(){
        return $this->name;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getAttributes(){
        return $this->attributes;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setName($name){
        return $this->name = $name;
    }

    public function setQuantity($quantity){
        return $this->quantity = $quantity;
    }

    public function setCategory($category){
        return $this->category = $category;
    }

    public function setAttributes($attributes){
        return $this->attributes = $attributes;
    }

    public function setPrice($price){
        return $this->price = $price;
    }
    
    public function calculatePrice(){
        $allAttributes = [
            'size' => [
                'small' => -10,
                'medium' => 20,
                'large' => 50
            ],
            'color' => [
                'white' => -15,
                'red' => 20,
                'blue' => 18
            ]
        ];
        $price = $this->getPrice();
        foreach ($this->getAttributes() as $key => $attribute) {
            if (!isset($allAttributes[$key][$attribute])) {
                throw new Exception("Invalid attribute value: $attribute for key: $key");
            }
            $price += $allAttributes[$key][$attribute];
            $this->setPrice($price);
        }
    
        return $this->getPrice();
    }

    public function create() {
        $product = new self();
        $product->setName('t-shirt');
        $product->setPrice(50);
        $product->setQuantity(30);
        $product->setCategory('men');
        $product->setAttributes(['size' => 'small','color' => 'red']);
        return $product;
    }
}