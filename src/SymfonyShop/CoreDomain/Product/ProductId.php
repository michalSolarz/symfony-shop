<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 28.06.16
 * Time: 23:14
 */

namespace SymfonyShop\CoreDomain\Product;


class ProductId
{
    private $value;

    public function __construct($value)
    {
        $this->value = (string)$value;
    }

    public function getValue()
    {
        return $this->value;
    }
}