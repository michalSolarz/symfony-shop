<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 07.07.16
 * Time: 21:58
 */

namespace AppBundle\Tests\Model\BackendProductSearch;


use AppBundle\Model\BackendProductSearch\BooleanCondition;

class BooleanConditionTest extends \PHPUnit_Framework_TestCase
{

    public function testEmptyValue()
    {
        $booleanConditionWithNull = new BooleanCondition(null);
        $this->assertEquals(false, $booleanConditionWithNull->conditionExists());
        $this->assertEquals(null, $booleanConditionWithNull->getValue());
        
        $booleanConditionWithEmptyString = new BooleanCondition('');
        $this->assertEquals(false, $booleanConditionWithEmptyString->conditionExists());
        $this->assertEquals(null, $booleanConditionWithEmptyString->getValue());

        $booleanConditionWithInvalidValue = new BooleanCondition(5);
        $this->assertEquals(false, $booleanConditionWithInvalidValue->conditionExists());
        $this->assertEquals(null, $booleanConditionWithInvalidValue->getValue());
    }

    public function testValidValues()
    {
        $booleanTrue = new BooleanCondition(BooleanCondition::YES_VALUE);
        $this->assertEquals(true, $booleanTrue->conditionExists());
        $this->assertEquals(true, $booleanTrue->getValue());
        
        $booleanFalse = new BooleanCondition(BooleanCondition::NO_VALUE);
        $this->assertEquals(true, $booleanFalse->conditionExists());
        $this->assertEquals(false, $booleanFalse->getValue());
    }


}
