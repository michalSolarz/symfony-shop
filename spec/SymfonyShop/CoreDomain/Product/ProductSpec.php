<?php

namespace spec\SymfonyShop\CoreDomain\Product;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use SymfonyShop\CoreDomain\Money\Money;
use SymfonyShop\CoreDomain\Product\ProductId;
use SymfonyShop\CoreDomain\StaffPerson\StaffPerson;

class ProductSpec extends ObjectBehavior
{
    function it_should_be_created_by_an_staff_containing_a_name_a_price_and_description(ProductId $id, StaffPerson $staff, Money $price)
    {
        $this->beConstructedWith($id, $staff, 'name', $price, 'description');
        $this->shouldHaveType('SymfonyShop\CoreDomain\Product\Product');
    }

    function it_should_be_created_as_invisible(ProductId $id, StaffPerson $staff, Money $price)
    {
        $this->beConstructedWith($id, $staff, 'name', $price, 'description');
        $this->isInvisible()->shouldBe(true);
    }

    function it_should_be_published(ProductId $id, StaffPerson $staff, Money $price)
    {
        $this->beConstructedWith($id, $staff, 'name', $price, 'description');
        $this->makeVisible();
        $this->isVisible()->shouldBe(true);
    }

    function it_should_raise_exception_during_publish_if_it_was_already_public(ProductId $id, StaffPerson $staff, Money $price)
    {
        $this->beConstructedWith($id, $staff, 'name', $price, 'description');
        $this->makeVisible();
        $this->shouldThrow('Exception')->duringMakeVisible();
    }
}
