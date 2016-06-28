<?php

namespace SymfonyShop\CoreDomain\ProductStatus;

/**
 * Class ProductStatus
 * @package SymfonyShop\CoreDomain\ProductStatus
 */
class ProductStatus
{
    /**
     *
     */
    const INVISIBLE = 'invisible';
    /**
     *
     */
    const VISIBLE = 'visible';
    /**
     *
     */
    const OUT_OF_STOCK = 'out-of-stock';

    /**
     * @var string
     */
    private $status;

    /**
     * ProductStatus constructor.
     * @param string $status
     */
    public function __construct($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }


}
