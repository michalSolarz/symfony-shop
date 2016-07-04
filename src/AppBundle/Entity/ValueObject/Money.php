<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 29.06.16
 * Time: 23:39
 */

namespace AppBundle\Entity\ValueObject;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Embeddable
 */
class Money
{

    /**
     *
     */
    const DIVISOR = 100;

    /**
     * @ORM\Column(type="integer")
     */
    private $amount;

    /**
     * @ORM\Column(type="string")
     */
    private $currency;

    /**
     * Money constructor.
     * @param $amount
     * @param $currency
     */
    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return ($this->amount / self::DIVISOR) . ' ' . $this->currency;
    }

    /**
     * @return integer
     *
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

    /**
     * @return array
     */
    public static function getCurrencies()
    {
        return array_combine(self::currencyArray(), self::currencyArray());
    }
    
    /**
     * @return array
     */
    private static function currencyArray()
    {
        return array('PLN', 'USD', 'EUR');
    }
}