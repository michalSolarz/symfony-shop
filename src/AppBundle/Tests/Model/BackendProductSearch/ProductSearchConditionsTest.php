<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 07.07.16
 * Time: 21:58
 */

namespace AppBundle\Tests\Model\BackendProductSearch;


use AppBundle\Model\BackendProductSearch\BooleanCondition;
use AppBundle\Model\BackendProductSearch\ProductSearchConditions;

class ProductSearchConditionsTest extends \PHPUnit_Framework_TestCase
{

    public function testProductName()
    {
        $productSearchCondition = new ProductSearchConditions();
        
        $productSearchCondition->setProductName(null);
        $this->assertEquals(false, $productSearchCondition->hasProductName());
        $this->assertEquals(null, $productSearchCondition->getProductName());

        $productSearchCondition->setProductName('');
        $this->assertEquals(false, $productSearchCondition->hasProductName());
        $this->assertEquals(null, $productSearchCondition->getProductName());

        $productName = 'test';
        $productSearchCondition->setProductName($productName);
        $this->assertEquals(true, $productSearchCondition->hasProductName());
        $this->assertEquals($productName, $productSearchCondition->getProductName());

        $productSearchCondition->setProductName('   '.$productName.'   ');
        $this->assertEquals(true, $productSearchCondition->hasProductName());
        $this->assertEquals($productName, $productSearchCondition->getProductName());
    }

    public function testProductIsVisible()
    {
        $productSearchCondition = new ProductSearchConditions();

        $productSearchCondition->setProductIsVisible(null);
        $this->assertEquals(false, $productSearchCondition->hasProductIsVisible());
        $this->assertEquals(null, $productSearchCondition->getProductIsVisible());

        $productSearchCondition->setProductIsVisible('');
        $this->assertEquals(false, $productSearchCondition->hasProductIsVisible());
        $this->assertEquals(null, $productSearchCondition->getProductIsVisible());

        $productSearchCondition->setProductIsVisible(5);
        $this->assertEquals(false, $productSearchCondition->hasProductIsVisible());
        $this->assertEquals(null, $productSearchCondition->getProductIsVisible());

        $productSearchCondition->setProductIsVisible(BooleanCondition::YES_VALUE);
        $this->assertEquals(true, $productSearchCondition->hasProductIsVisible());
        $this->assertEquals(true, $productSearchCondition->getProductIsVisible());

        $productSearchCondition->setProductIsVisible(BooleanCondition::NO_VALUE);
        $this->assertEquals(true, $productSearchCondition->hasProductIsVisible());
        $this->assertEquals(false, $productSearchCondition->getProductIsVisible());
    }

    public function testProductIsAvailable()
    {
        $productSearchCondition = new ProductSearchConditions();

        $productSearchCondition->setProductIsAvailable(null);
        $this->assertEquals(false, $productSearchCondition->hasProductIsAvailable());
        $this->assertEquals(null, $productSearchCondition->getProductIsAvailable());

        $productSearchCondition->setProductIsAvailable('');
        $this->assertEquals(false, $productSearchCondition->hasProductIsAvailable());
        $this->assertEquals(null, $productSearchCondition->getProductIsAvailable());

        $productSearchCondition->setProductIsAvailable(5);
        $this->assertEquals(false, $productSearchCondition->hasProductIsAvailable());
        $this->assertEquals(null, $productSearchCondition->getProductIsAvailable());

        $productSearchCondition->setProductIsAvailable(BooleanCondition::YES_VALUE);
        $this->assertEquals(true, $productSearchCondition->hasProductIsAvailable());
        $this->assertEquals(true, $productSearchCondition->getProductIsAvailable());

        $productSearchCondition->setProductIsAvailable(BooleanCondition::NO_VALUE);
        $this->assertEquals(true, $productSearchCondition->hasProductIsAvailable());
        $this->assertEquals(false, $productSearchCondition->getProductIsAvailable());
    }

    public function testProductIntroduction()
    {
        $productSearchCondition = new ProductSearchConditions();

        $productSearchCondition->setProductIntroduction(null);
        $this->assertEquals(false, $productSearchCondition->hasProductIntroduction());
        $this->assertEquals(null, $productSearchCondition->getProductIntroduction());

        $productSearchCondition->setProductIntroduction('');
        $this->assertEquals(false, $productSearchCondition->hasProductIntroduction());
        $this->assertEquals(null, $productSearchCondition->getProductIntroduction());

        $productName = 'test';
        $productSearchCondition->setProductIntroduction($productName);
        $this->assertEquals(true, $productSearchCondition->hasProductIntroduction());
        $this->assertEquals($productName, $productSearchCondition->getProductIntroduction());

        $productSearchCondition->setProductIntroduction('   '.$productName.'   ');
        $this->assertEquals(true, $productSearchCondition->hasProductIntroduction());
        $this->assertEquals($productName, $productSearchCondition->getProductIntroduction());
    }

    public function testProductDescription()
    {
        $productSearchCondition = new ProductSearchConditions();

        $productSearchCondition->setProductDescription(null);
        $this->assertEquals(false, $productSearchCondition->hasProductDescription());
        $this->assertEquals(null, $productSearchCondition->getProductDescription());

        $productSearchCondition->setProductDescription('');
        $this->assertEquals(false, $productSearchCondition->hasProductDescription());
        $this->assertEquals(null, $productSearchCondition->getProductDescription());

        $productName = 'test';
        $productSearchCondition->setProductDescription($productName);
        $this->assertEquals(true, $productSearchCondition->hasProductDescription());
        $this->assertEquals($productName, $productSearchCondition->getProductDescription());

        $productSearchCondition->setProductDescription('   '.$productName.'   ');
        $this->assertEquals(true, $productSearchCondition->hasProductDescription());
        $this->assertEquals($productName, $productSearchCondition->getProductDescription());
    }
}
