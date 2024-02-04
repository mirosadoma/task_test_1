<?php

namespace Task1\Services\Orders;

use Task1\Interfaces\StatusChangeInterface;
use Task1\Models\Order;

class PendingStatus implements StatusChangeInterface
{
    public function execute(Order $order, $extra)
    {
        $order->setStatus('pending');
    }
}