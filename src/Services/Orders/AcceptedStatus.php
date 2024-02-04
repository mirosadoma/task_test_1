<?php

namespace Task1\Services\Orders;

use Task1\Interfaces\StatusChangeInterface;
use Task1\Models\Order;

class AcceptedStatus implements StatusChangeInterface
{
    public function execute(Order $order, $extra)
    {
        $order->setStatus('accepted');
        $order->getUser()->notify("Your order has been accepted");
        $order->calculateTotalPrice();
        if ($extra) {
            $order->applyExtraTax();
        }
    }
}