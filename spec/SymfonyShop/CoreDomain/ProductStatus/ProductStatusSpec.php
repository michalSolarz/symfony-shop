<?php

namespace spec\SymfonyShop\CoreDomain\ProductStatus;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductStatusSpec extends ObjectBehavior
{
    function it_is_created_with_status_name($name)
    {
        $this->beConstructedWith($name);
        $this->shouldHaveType('SymfonyShop\CoreDomain\ProductStatus\ProductStatus');
    }
}
