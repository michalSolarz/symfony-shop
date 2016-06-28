<?php

namespace spec\SymfonyShop\CoreDomain\Staff;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StaffSpec extends ObjectBehavior
{
    function it_should_always_have_a_name_surname_and_email($name, $surname, $email)
    {
        $this->beConstructedWith($name, $surname, $email);
        $this->shouldHaveType('SymfonyShop\CoreDomain\Staff\Staff');
    }
}
