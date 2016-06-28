<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 24.06.16
 * Time: 00:39
 */

namespace SymfonyShop\AppBundle\DataFixtures\ORM;


use SymfonyShop\AppBundle\Entity\Product;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadProductData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $manager->persist($product);
        $manager->flush();
    }
}