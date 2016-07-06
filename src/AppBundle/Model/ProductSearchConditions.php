<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 06.07.16
 * Time: 23:01
 */

namespace AppBundle\Model;


class ProductSearchConditions
{
    const YES_VALUE = 1;
    const NO_VALUE = -1;

    private $productName;
    private $productIsVisible;
    private $productIsAvailable;
    private $productIntroduction;
    private $productDescription;

    public function hasProductName()
    {
        return $this->stringConditionVerifier($this->productName);
    }

    public function hasProductIsVisible()
    {
        return $this->booleanConditionVerifier($this->productIsVisible);
    }

    public function hasProductIsAvailable()
    {
        return $this->booleanConditionVerifier($this->productIsAvailable);
    }

    public function hasProductIntroduction()
    {
        return $this->stringConditionVerifier($this->productIntroduction);
    }

    public function hasProductDescription()
    {
        return $this->stringConditionVerifier($this->productDescription);
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $this->trimString($productName);
    }

    /**
     * @return bool
     */
    public function getProductIsVisible()
    {
        return $this->productIsVisible;
    }

    /**
     * @param bool $productIsVisible
     */
    public function setProductIsVisible($productIsVisible)
    {
        $this->productIsVisible = $this->getBooleanValue($productIsVisible);
    }

    /**
     * @return bool
     */
    public function getProductIsAvailable()
    {
        return $this->productIsAvailable;
    }

    /**
     * @param bool $productIsAvailable
     */
    public function setProductIsAvailable($productIsAvailable)
    {
        $this->productIsAvailable = $this->getBooleanValue($productIsAvailable);
    }

    /**
     * @return string
     */
    public function getProductIntroduction()
    {
        return $this->productIntroduction;
    }

    /**
     * @param string $productIntroduction
     */
    public function setProductIntroduction($productIntroduction)
    {
        $this->productIntroduction = $this->trimString($productIntroduction);
    }

    /**
     * @return string
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * @param string $productDescription
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $this->trimString($productDescription);
    }

    private function trimString($string)
    {
        return trim((string)$string);
    }

    private function getBooleanValue($boolean)
    {
        if (is_null($boolean) || !in_array((integer)$boolean, array(self::YES_VALUE, self::NO_VALUE)))
            return null;

        $boolean = (integer)$boolean;
        if ($boolean === self::YES_VALUE)
            return true;

        if ($boolean === self::NO_VALUE)
            return false;

        return null;
    }

    private function stringConditionVerifier($string)
    {
        if (is_null($string))
            return false;

        if (!(strlen($string) > 0))
            return false;

        return true;
    }

    private function booleanConditionVerifier($boolean)
    {
        if (is_null($boolean))
            return false;

        return true;
    }
}