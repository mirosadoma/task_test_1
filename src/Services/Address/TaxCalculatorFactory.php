<?php

namespace Task1\Services\Address;

use Task1\Interfaces\TaxCalculator;

class TaxCalculatorFactory
{
    public static function create(string $shippingMethod, $address) {
        $strategyClassName = '\\Task1\\Services\\Address\\' . ucfirst($shippingMethod) . 'TaxCalculator';
        if (!class_exists($strategyClassName)) {
            throw new \Exception("Unsupported shipping method: " . $shippingMethod);
        }
        return (new $strategyClassName())->calculateTax($address);
    }
}