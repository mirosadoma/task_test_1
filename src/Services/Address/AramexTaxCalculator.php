<?php

namespace Task1\Services\Address;

use Task1\Interfaces\TaxCalculator;
use Task1\Models\Address;

class AramexTaxCalculator implements TaxCalculator
{
    public function calculateTax(Address $address): float {
        if ($address->getCountry() == 'egypt') {
            return 0.14;
        } elseif ($address->getCountry() == 'kuwait') {
            return 0.1;
        }
        return 0;
    }
}