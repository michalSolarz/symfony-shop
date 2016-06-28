<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 28.06.16
 * Time: 23:34
 */

namespace SymfonyShop\CoreDomain\Product;


interface ProductRepository
{
    public function find(ProductId $productId);

    public function findAll();

    public function add(Product $product);

    public function remove(Product $product);
}