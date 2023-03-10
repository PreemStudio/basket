<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\NorthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

class TexasValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * TexasValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.0625;
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
