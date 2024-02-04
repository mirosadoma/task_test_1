<?php

namespace Task1\Services\Orders;

use Task1\Interfaces\StatusChangeInterface;
use Task1\Models\Order;

class ProcessingStatus implements StatusChangeInterface
{
    public function execute(Order $order, $extra)
    {
        $order->setStatus('processing');
        $order->getUser()->notify("Your order is being processed");
    }
}