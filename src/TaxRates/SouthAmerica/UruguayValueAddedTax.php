<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\SouthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

class UruguayValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * UruguayValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.22;
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
