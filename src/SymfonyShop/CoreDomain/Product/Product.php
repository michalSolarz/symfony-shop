<?php

namespace SymfonyShop\CoreDomain\Product;

use SymfonyShop\CoreDomain\Money\Money;
use SymfonyShop\CoreDomain\ProductStatus\ProductStatus;
use SymfonyShop\CoreDomain\Staff\Staff;

/**
 * Class Product
 * @package SymfonyShop\CoreDomain\Product
 */
class Product
{
    /**
     * @var Staff
     */
    private $creator;
    /**
     * @var string
     */
    private $name;
    /**
     * @var ProductStatus
     */
    private $status;
    /**
     * @var Money
     */
    private $price;
    /**
     * @var string
     */
    private $description;

    /**
     * Product constructor.
     * @param Staff $creator
     * @param $name
     * @param Money $price
     * @param $description
     */
    public function __construct(Staff $creator, $name, Money $price, $description)
    {
        $this->creator = $creator;
        $this->name = $name;
        $this->status = new ProductStatus(ProductStatus::INVISIBLE);
        $this->price = $price;
        $this->description = $description;
    }

    public function isInvisible()
    {
        return $this->status->getStatus() === ProductStatus::INVISIBLE;
    }

    public function isVisible()
    {
        return $this->status->getStatus() === ProductStatus::VISIBLE;
    }

    public function isAvailable()
    {
        return $this->status->getStatus() === ProductStatus::OUT_OF_STOCK;
    }

    public function makeInvisible()
    {
        if(!$this->couldBeMadeInvisible())
            throw new \Exception("Could not do this transition");

        return $this->status = new ProductStatus(ProductStatus::INVISIBLE);
    }

    public function makeVisible()
    {
        if(!$this->couldBeMadeVisible())
            throw new \Exception("Could not do this transition");

        return $this->status = new ProductStatus(ProductStatus::VISIBLE);
    }

    public function makeOutOfStock()
    {
        if(!$this->couldBeMadeOutOfStock())
            throw new \Exception("Could not do this transition");

        return $this->status = new ProductStatus(ProductStatus::OUT_OF_STOCK);
    }

    private function couldBeMadeInvisible()
    {
        return !$this->isInvisible();
    }

    private function couldBeMadeVisible()
    {
        return !$this->isVisible();
    }

    private function couldBeMadeOutOfStock()
    {
        return !$this->isAvailable();
    }
}
