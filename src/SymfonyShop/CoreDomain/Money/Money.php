<?php

namespace SymfonyShop\CoreDomain\Money;

/**
 * Class Money
 * @package SymfonyShop\CoreDomain\Money
 */
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
     * @param $amount
     * @param $currency
     *
     * @throws MoneyValueObjectException
     */
    public function __construct($amount, $currency)
    {
        if ($amount <= 0)
            throw new MoneyValueObjectException('Money amount must be greater than 0.');

        $this->amount = $amount;
        $this->currency = strtoupper($currency);
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}
