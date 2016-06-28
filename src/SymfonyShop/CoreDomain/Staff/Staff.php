<?php

namespace SymfonyShop\CoreDomain\Staff;

class Staff
{
    private $name;
    private $surname;
    private $email;

    public function __construct($name, $surname, $email)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
    }
}
