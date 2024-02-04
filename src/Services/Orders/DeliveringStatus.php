<?php

namespace Task1\Services\Orders;

use Task1\Interfaces\StatusChangeInterface;
use Task1\Models\Order;

class DeliveringStatus implements StatusChangeInterface
{
    public function execute(Order $order, $extra)
    {
        $order->setStatus('delivering');
        $order->getUser()->notify("Your order is being delivered");
        $order->setInvoiceNumber(rand(1, 10));
        $order->calculateTotalPrice();
        $order->applyShippingCostAndTax();
    }
}