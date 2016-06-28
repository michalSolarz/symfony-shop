<?php

namespace SymfonyShop\CoreDomain\StaffPerson;

class StaffPerson
{
    private $id;
    private $name;
    private $surname;
    private $email;

    public function __construct(StaffPersonId $id, $name, $surname, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
    }

    /**
     * @return StaffPersonId
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

}
