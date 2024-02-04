<?php

namespace Task1\Tests;

use PHPUnit\Framework\TestCase;
use Task1\Models\Product;

class ProductTest extends TestCase
{
    public function testProductCalculatePriceSmallWhite(){
        try {
            $product = new Product();
            $product->setAttributes(['size' => 'small','color' => 'white']);
            $price = $product->calculatePrice();
            // Assert that price is equal -25
            $this->assertEquals(-25,$price);
            // Output message indicating successful test execution
            echo "\n\r ================ \n\r Done Small - White - "."(".$price.")"." \n\r ================";
        } catch (\TypeError $th) {
            $this->assertStringStartsWith('App\Tests\ProductTest::testProductCalculatePriceSmallWhite():', $th->getMessage());
        }
    }
    public function testProductCalculatePriceMediumWhite(){
        try {
            $product = new Product();
            $product->setAttributes(['size' => 'medium','color' => 'white']);
            $price = $product->calculatePrice();
            // Assert that price is equal 5
            $this->assertEquals(5,$price);
            // Output message indicating successful test execution
            echo "\n\r ================ \n\r Done Medium - White - "."(".$price.")"." \n\r ================";
        } catch (\TypeError $th) {
            $this->assertStringStartsWith('App\Tests\ProductTest::testProductCalculatePriceMediumWhite():', $th->getMessage());
        }
    }
    public function testProductCalculatePriceLargeWhite(){
        try {
            $product = new Product();
            $product->setAttributes(['size' => 'large','color' => 'white']);
            $price = $product->calculatePrice();
            // Assert that price is equal 35
            $this->assertEquals(35,$price);
            // Output message indicating successful test execution
            echo "\n\r ================ \n\r Done Large - White - "."(".$price.")"." \n\r ================";
        } catch (\TypeError $th) {
            $this->assertStringStartsWith('App\Tests\ProductTest::testProductCalculatePriceLargeWhite():', $th->getMessage());
        }
    }
    public function testProductCalculatePriceSmallRed(){
        try {
            $product = new Product();
            $product->setAttributes(['size' => 'small','color' => 'red']);
            $price = $product->calculatePrice();
            // Assert that price is equal 10
            $this->assertEquals(10,$price);
            // Output message indicating successful test execution
            echo "\n\r ================ \n\r Done Small - Red - "."(".$price.")"." \n\r ================";
        } catch (\TypeError $th) {
            $this->assertStringStartsWith('App\Tests\ProductTest::testProductCalculatePriceSmallRed():', $th->getMessage());
        }
    }
    public function testProductCalculatePriceMediumRed(){
        try {
            $product = new Product();
            $product->setAttributes(['size' => 'medium','color' => 'red']);
            $price = $product->calculatePrice();
            // Assert that price is equal 40
            $this->assertEquals(40,$price);
            // Output message indicating successful test execution
            echo "\n\r ================ \n\r Done Medium - Red - "."(".$price.")"." \n\r ================";
        } catch (\TypeError $th) {
            $this->assertStringStartsWith('App\Tests\ProductTest::testProductCalculatePriceMediumRed():', $th->getMessage());
        }
    }
    public function testProductCalculatePriceLargeRed(){
        try {
            $product = new Product();
            $product->setAttributes(['size' => 'large','color' => 'red']);
            $price = $product->calculatePrice();
            // Assert that price is equal 70
            $this->assertEquals(70,$price);
            // Output message indicating successful test execution
            echo "\n\r ================ \n\r Done Large - Red - "."(".$price.")"." \n\r ================";
        } catch (\TypeError $th) {
            $this->assertStringStartsWith('App\Tests\ProductTest::testProductCalculatePriceLargeRed():', $th->getMessage());
        }
    }
    public function testProductCalculatePriceSmallBlue(){
        try {
            $product = new Product();
            $product->setAttributes(['size' => 'small','color' => 'blue']);
            $price = $product->calculatePrice();
            // Assert that price is equal 8
            $this->assertEquals(8,$price);
            // Output message indicating successful test execution
            echo "\n\r ================ \n\r Done Small - Blue - "."(".$price.")"." \n\r ================";
        } catch (\TypeError $th) {
            $this->assertStringStartsWith('App\Tests\ProductTest::testProductCalculatePriceSmallBlue():', $th->getMessage());
        }
    }
    public function testProductCalculatePriceMediumBlue(){
        try {
            $product = new Product();
            $product->setAttributes(['size' => 'medium','color' => 'blue']);
            $price = $product->calculatePrice();
            // Assert that price is equal 38
            $this->assertEquals(38,$price);
            // Output message indicating successful test execution
            echo "\n\r ================ \n\r Done Medium - Blue - "."(".$price.")"." \n\r ================";
        } catch (\TypeError $th) {
            $this->assertStringStartsWith('App\Tests\ProductTest::testProductCalculatePriceMediumBlue():', $th->getMessage());
        }
    }
    public function testProductCalculatePriceLargeBlue(){
        try {
            $product = new Product();
            $product->setAttributes(['size' => 'large','color' => 'blue']);
            $price = $product->calculatePrice();
            // Assert that price is equal 68
            $this->assertEquals(68,$price);
            // Output message indicating successful test execution
            echo "\n\r ================ \n\r Done Large - Blue - "."(".$price.")"." \n\r ================";
        } catch (\TypeError $th) {
            $this->assertStringStartsWith('App\Tests\ProductTest::testProductCalculatePriceLargeBlue():', $th->getMessage());
        }
    }
}
