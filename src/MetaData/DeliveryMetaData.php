<?php

declare(strict_types=1);

namespace PreemStudio\Basket\MetaData;

use Money\Money;
use PreemStudio\Basket\Basket;
use PreemStudio\Basket\Contracts\MetaData;
use PreemStudio\Basket\Contracts\Reconciler;

class DeliveryMetaData implements MetaData
{
    /**
     * @var Reconciler
     */
    private $reconciler;

    /**
     * DeliveryMetaData constructor.
     */
    public function __construct(Reconciler $reconciler)
    {
        $this->reconciler = $reconciler;
    }

    /**
     * @return Money
     */
    public function generate(Basket $basket)
    {
        $total = new Money(0, $basket->currency());

        foreach ($basket->products() as $product) {
            $total = $total->add($this->reconciler->delivery($product));
        }

        if ($basket->delivery instanceof Money) {
            $total = $total->add($basket->delivery);
        }

        return $total;
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'delivery';
    }
}
