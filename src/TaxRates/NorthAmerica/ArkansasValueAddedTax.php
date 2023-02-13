<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\NorthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

class ArkansasValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * ArkansasValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.065;
    }

    /**
     * @return float
     */
    public function float(): float
    {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function percentage(): int
    {
        return intval($this->rate * 100);
    }
}