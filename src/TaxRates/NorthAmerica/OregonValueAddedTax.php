<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\NorthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

class OregonValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * OregonValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.00;
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