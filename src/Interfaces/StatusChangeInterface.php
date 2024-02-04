<?php

namespace Task1\Interfaces;

use Task1\Models\Order;

interface StatusChangeInterface
{
    public function execute(Order $order, $extra);
}