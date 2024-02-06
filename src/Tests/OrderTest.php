<?php

namespace Task1\Tests;

use PHPUnit\Framework\TestCase;
use Task1\Models\Address;
use Task1\Models\Country;
use Task1\Models\Order;
use Task1\Models\Shipping;
use Task1\Models\Product;
use Task1\Models\User;

class OrderTest extends TestCase
{
    public function testOrderHaveReceipt(){
        try {
            $country = (new Country)->create();
            $address = (new Address($country))->create();
            $shipping = (new Shipping)->create();
            $product = (new Product)->create();
            $user = (new User($address))->create();

            $order = new Order();
            $order->setUser($user);
            $order->setProducts([$product]);
            $order->setTax(.02);
            $order->setShipping($shipping);
            $order->setPrice($product->getPrice());

            $order->changeStatus('delivering');
            $print_receipt = $order->printReceipt();

            // Assert that two string is equals
            $this->assertEquals('total price : 83.16 #|# user name : ahmed mohamed #|# product name : t-shirt category : men price : 60 #|# size small #|# color red',$print_receipt);
            // Output message indicating successful test execution
            echo "\n\r ================ \n\r Done \n\r ================";
        } catch (\TypeError $th) {
            $this->assertStringStartsWith('App\Tests\OrderTest::testOrderHaveReceipt():', $th->getMessage());
        }
    }
}
