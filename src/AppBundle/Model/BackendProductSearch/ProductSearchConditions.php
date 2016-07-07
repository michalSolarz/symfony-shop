<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 06.07.16
 * Time: 23:01
 */

namespace AppBundle\Model\BackendProductSearch;


/**
 * Class ProductSearchConditions
 * @package AppBundle\Model
 */
class ProductSearchConditions
{
    /**
     * @var string
     */
    private $productName;
    /**
     * @var boolean
     */
    private $productIsVisible;
    /**
     * @var boolean
     */
    private $productIsAvailable;
    /**
     * @var string
     */
    private $productIntroduction;
    /**
     * @var string
     */
    private $productDescription;

    /**
     * @return boolean|null
     */
    public function hasProductName()
    {
        if (!is_null($this->productName))
            return $this->productName->conditionExists();

        return false;
    }

    /**
     * @return boolean|null
     */
    public function hasProductIsVisible()
    {
        if (!is_null($this->productIsVisible))
            return $this->productIsVisible->conditionExists();

        return false;
    }

    /**
     * @return boolean|null
     */
    public function hasProductIsAvailable()
    {
        if (!is_null($this->productIsAvailable))
            return $this->productIsAvailable->conditionExists();

        return false;
    }

    /**
     * @return boolean|null
     */
    public function hasProductIntroduction()
    {
        if (!is_null($this->productIntroduction))
            return $this->productIntroduction->conditionExists();

        return false;
    }

    /**
     * @return boolean|null
     */
    public function hasProductDescription()
    {
        if (!is_null($this->productDescription))
            return $this->productDescription->conditionExists();

        return null;
    }

    /**
     * @return string|null
     */
    public function getProductName()
    {
        if (!is_null($this->productName))
            return $this->productName->getValue();

        return null;
    }

    /**
     * @param string $productName
     */
    public function setProductName($productName)
    {
        $this->productName = new StringCondition($productName);
    }

    /**
     * @return boolean|null
     */
    public function getProductIsVisible()
    {
        if (!is_null($this->productIsVisible))
            return $this->productIsVisible->getValue();

        return null;
    }

    /**
     * @param bool $productIsVisible
     */
    public function setProductIsVisible($productIsVisible)
    {
        $this->productIsVisible = new BooleanCondition($productIsVisible);
    }

    /**
     * @return boolean|null
     */
    public function getProductIsAvailable()
    {
        if (!is_null($this->productIsAvailable))
            return $this->productIsAvailable->getValue();

        return null;
    }

    /**
     * @param bool $productIsAvailable
     */
    public function setProductIsAvailable($productIsAvailable)
    {
        $this->productIsAvailable = new BooleanCondition($productIsAvailable);
    }

    /**
     * @return string|null
     */
    public function getProductIntroduction()
    {
        if (!is_null($this->productIntroduction))
            return $this->productIntroduction->getValue();

        return null;
    }

    /**
     * @param string $productIntroduction
     */
    public function setProductIntroduction($productIntroduction)
    {
        $this->productIntroduction = new StringCondition($productIntroduction);
    }

    /**
     * @return string|null
     */
    public function getProductDescription()
    {
        if (!is_null($this->productDescription))
            return $this->productDescription->getValue();

        return null;
    }

    /**
     * @param string $productDescription
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = new StringCondition($productDescription);
    }

}