<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 28.06.16
 * Time: 23:41
 */
namespace SymfonyShop\CoreDomain\Tests\Money;


use SymfonyShop\CoreDomain\Money\Money;
use SymfonyShop\CoreDomain\Money\MoneyValueObjectException;

class MoneyTest extends \PHPUnit_Framework_TestCase
{

    public function testValueObject()
    {
        $money = new Money(19.99, 'PLN');
        $this->assertEquals(19.99, $money->getAmount());
        $this->assertEquals('PLN', $money->getCurrency());
    }

    public function testExceptionThrowing()
    {
        $this->setExpectedException(MoneyValueObjectException::class);
        new Money(-10, 'PLN');
    }

    public function testCurrencyCapitalized()
    {
        $money = new Money(19.99, 'pln');
        $this->assertEquals(19.99, $money->getAmount());
        $this->assertEquals('PLN', $money->getCurrency());
    }


}
