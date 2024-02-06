<?php

namespace Task1\Services\Address;

use Task1\Interfaces\TaxCalculator;
use Task1\Models\Address;

class FedexTaxCalculator implements TaxCalculator
{
    public function calculateTax(Address $address): float {
        if ($address->getCountry() == 'egypt') {
            return 0.20;
        } elseif ($address->getCountry() == 'kuwait') {
            return 0.13;
        }
        return 0;
    }
}