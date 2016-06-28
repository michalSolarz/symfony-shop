<?php

namespace SymfonyShop\CoreDomain\Product;

use SymfonyShop\CoreDomain\Money\Money;
use SymfonyShop\CoreDomain\ProductStatus\ProductStatus;
use SymfonyShop\CoreDomain\StaffPerson\StaffPerson;

/**
 * Class Product
 * @package SymfonyShop\CoreDomain\Product
 */
class Product
{
    /**
     * @var ProductId
     */
    private $id;

    /**
     * @var StaffPerson
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
     * @param ProductId $id
     * @param StaffPerson $creator
     * @param $name
     * @param Money $price
     * @param $description
     */
    public function __construct(ProductId $id, StaffPerson $creator, $name, Money $price, $description)
    {
        $this->id = $id;
        $this->creator = $creator;
        $this->name = $name;
        $this->status = new ProductStatus(ProductStatus::INVISIBLE);
        $this->price = $price;
        $this->description = $description;
    }

    /**
     * @return ProductId
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return StaffPerson
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return ProductStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return Money
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isInvisible()
    {
        return $this->status->getStatus() === ProductStatus::INVISIBLE;
    }

    /**
     * @return bool
     */
    public function isVisible()
    {
        return $this->status->getStatus() === ProductStatus::VISIBLE;
    }

    /**
     * @return bool
     */
    public function isAvailable()
    {
        return $this->status->getStatus() === ProductStatus::OUT_OF_STOCK;
    }

    /**
     * @return ProductStatus
     * @throws \Exception
     */
    public function makeInvisible()
    {
        if (!$this->couldBeMadeInvisible())
            throw new \Exception("Could not do this transition");

        return $this->status = new ProductStatus(ProductStatus::INVISIBLE);
    }

    /**
     * @return ProductStatus
     * @throws \Exception
     */
    public function makeVisible()
    {
        if (!$this->couldBeMadeVisible())
            throw new \Exception("Could not do this transition");

        return $this->status = new ProductStatus(ProductStatus::VISIBLE);
    }

    /**
     * @return ProductStatus
     * @throws \Exception
     */
    public function makeOutOfStock()
    {
        if (!$this->couldBeMadeOutOfStock())
            throw new \Exception("Could not do this transition");

        return $this->status = new ProductStatus(ProductStatus::OUT_OF_STOCK);
    }

    /**
     * @return bool
     */
    private function couldBeMadeInvisible()
    {
        return !$this->isInvisible();
    }

    /**
     * @return bool
     */
    private function couldBeMadeVisible()
    {
        return !$this->isVisible();
    }

    /**
     * @return bool
     */
    private function couldBeMadeOutOfStock()
    {
        return !$this->isAvailable();
    }
}
