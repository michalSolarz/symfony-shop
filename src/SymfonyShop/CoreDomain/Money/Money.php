<?php

namespace SymfonyShop\CoreDomain\Money;

/**
 * Class Money
 * @package SymfonyShop\CoreDomain\Money
 */
class Money
{
    /**
     * @var float
     */
    private $amount;
    /**
     * @var string
     */
    private $currency;


    /**
     * Money constructor.
     * @param float $amount
     * @param string $currency
     */
    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }
}
