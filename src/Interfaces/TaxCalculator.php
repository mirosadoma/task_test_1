<?php

namespace Task1\Interfaces;

use Task1\Models\Address;

interface TaxCalculator
{
    public function calculateTax(Address $address): float;
}