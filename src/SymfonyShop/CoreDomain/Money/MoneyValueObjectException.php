<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 28.06.16
 * Time: 23:51
 */

namespace SymfonyShop\CoreDomain\Money;


class MoneyValueObjectException extends \Exception
{
    public function __construct($message, $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}