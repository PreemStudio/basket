<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\Europe;

use PreemStudio\Basket\Contracts\TaxRate;

class AustriaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * AustriaValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.20;
    }

    public function float(): float
    {
        return $this->rate;
    }

    public function percentage(): int
    {
        return intval($this->rate * 100);
    }
}
