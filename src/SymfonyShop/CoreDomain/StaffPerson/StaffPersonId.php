<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 28.06.16
 * Time: 23:28
 */

namespace SymfonyShop\CoreDomain\StaffPerson;


/**
 * Class StaffPersonId
 * @package SymfonyShop\CoreDomain\StaffPerson
 */
class StaffPersonId
{
    /**
     * @var string
     */
    private $value;

    /**
     * StaffPersonId constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = (string)$value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}