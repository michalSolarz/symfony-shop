<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 04.07.16
 * Time: 19:59
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Product;
use AppBundle\Entity\ValueObject\Money;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadProductData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 100; $i++) {
            $product = new Product();
            $product->setName("Product {$i}");
            $i % 4 === 0 ? $product->setIsVisible(true) : $product->setIsVisible(false);
            $i % 2 === 0 ? $product->setIsAvailable(true) : $product->setIsAvailable(false);
            $i % 2 === 0 ? $product->setOnStockAmount($i) : $product->setOnStockAmount(0);
            $product->setIntroduction('Lorem ipsum');
            $product->setDescription('Lorem ipsum');
            $product->setPrice(new Money($i * 100, 'PLN'));
            $manager->persist($product);
        }
        $manager->flush();
    }
}