<?php

namespace AppBundle\Entity;

use AppBundle\Entity\ValueObject\Money;
use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @ORM\Column(type="boolean")
     */
    private $isVisible;
    /**
     * @ORM\Column(type="boolean")
     */
    private $isAvailable;
    /**
     * @ORM\Column(type="smallint")
     */
    private $onStockAmount;
    /**
     * @ORM\Embedded(class = "AppBundle\Entity\ValueObject\Money")
     */
    private $price;
    /**
     * @ORM\Column(type="text")
     */
    private $introduction;
    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * Product constructor.
     */
    public function __construct()
    {
        $this->price = new Money(0, 'PLN');
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsVisible()
    {
        return $this->isVisible;
    }

    /**
     * @param $isVisible
     * @return $this
     */
    public function setIsVisible($isVisible)
    {
        $this->isVisible = $isVisible;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * @param $isAvailable
     * @return $this
     */
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOnStockAmount()
    {
        return $this->onStockAmount;
    }

    /**
     * @param $onStockAmount
     * @return $this
     */
    public function setOnStockAmount($onStockAmount)
    {
        $this->onStockAmount = $onStockAmount;
        return $this;
    }

    /**
     * @return Money
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Money $price
     * @return $this
     */
    public function setPrice(Money $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * @param $introduction
     * @return $this
     */
    public function setIntroduction($introduction)
    {
        $this->introduction = $introduction;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

}
