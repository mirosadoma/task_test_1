<?php

namespace Task1\Tests;

use PHPUnit\Framework\TestCase;
use Task1\Models\Address;
use Task1\Models\Shipping;

class ShippingTest extends TestCase
{
    public function testcalculateTaxAramexEgypt(){
        try {
            $address = new Address();
            $address->setCountry('egypt');

            $shipping = new Shipping();
            $shipping->setName('aramex');
            $shipping->setTax(13);
            $shipping->setCost(10);
            $tax = $shipping->calculateTax($address);

            // Assert that tax is greater than zero
            $this->assertGreaterThan(0, $tax);
            // Output message indicating successful test execution
            echo "\n\r ================ \n\r Done Aramex - Egypt - "."(".$tax.")"." \n\r ================";
        } catch (\TypeError $th) {
            $this->assertStringStartsWith('App\Tests\ShippingTest::testcalculateTaxAramexEgypt():', $th->getMessage());
        }
    }
    public function testcalculateTaxAramexKuwait(){
        try {
            $address = new Address();
            $address->setCountry('kuwait');

            $shipping = new Shipping();
            $shipping->setName('aramex');
            $shipping->setTax(13);
            $shipping->setCost(10);
            $tax = $shipping->calculateTax($address);

            // Assert that tax is greater than zero
            $this->assertGreaterThan(0, $tax);
            // Output message indicating successful test execution
            echo "\n\r ================ \n\r Done Aramex - Kuwait - "."(".$tax.")"." \n\r ================";
        } catch (\TypeError $th) {
            $this->assertStringStartsWith('App\Tests\ShippingTest::testcalculateTaxAramexKuwait():', $th->getMessage());
        }
    }

    public function testcalculateTaxFedexEgypt(){
        try {
            $address = new Address();
            $address->setCountry('egypt');

            $shipping = new Shipping();
            $shipping->setName('fedex');
            $shipping->setTax(13);
            $shipping->setCost(10);
            $tax = $shipping->calculateTax($address);

            // Assert that tax is greater than zero
            $this->assertGreaterThan(0, $tax);
            // Output message indicating successful test execution
            echo "\n\r ================ \n\r Done Fedex - Egypt - "."(".$tax.")"." \n\r ================";
        } catch (\TypeError $th) {
            $this->assertStringStartsWith('App\Tests\ShippingTest::testcalculateTaxFedexEgypt():', $th->getMessage());
        }
    }
    public function testcalculateTaxFedexKuwait(){
        try {
            $address = new Address();
            $address->setCountry('kuwait');
            
            $shipping = new Shipping();
            $shipping->setName('fedex');
            $shipping->setTax(13);
            $shipping->setCost(10);
            $tax = $shipping->calculateTax($address);

            // Assert that tax is greater than zero
            $this->assertGreaterThan(0, $tax);
            // Output message indicating successful test execution
            echo "\n\r ================ \n\r Done Fedex - Kuwait - "."(".$tax.")"." \n\r ================";
        } catch (\TypeError $th) {
            $this->assertStringStartsWith('App\Tests\ShippingTest::testcalculateTaxFedexKuwait():', $th->getMessage());
        }
    }
}
