<?php

namespace spec\SymfonyShop\CoreDomain\Money;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MoneySpec extends ObjectBehavior
{
    function it_should_be_created_with_currency_and_amount()
    {
        $this->beConstructedWith(19.99, 'PLN');
        $this->shouldHaveType('SymfonyShop\CoreDomain\Money\Money');
    }
}
