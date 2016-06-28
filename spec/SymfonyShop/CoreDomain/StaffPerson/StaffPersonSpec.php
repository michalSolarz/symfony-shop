<?php

namespace spec\SymfonyShop\CoreDomain\StaffPerson;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StaffPersonSpec extends ObjectBehavior
{    
    function always_initialized_with_id_name_surname_email($id, $name, $surname, $email)
    {
        $this->beConstructedWith($id, $name, $surname, $email);
        $this->shouldHaveType('SymfonyShop\CoreDomain\StaffPerson\StaffPerson');
    }
}
