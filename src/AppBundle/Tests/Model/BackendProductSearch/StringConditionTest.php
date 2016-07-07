<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 07.07.16
 * Time: 21:59
 */

namespace AppBundle\Tests\Model\BackendProductSearch;


use AppBundle\Model\BackendProductSearch\StringCondition;

class StringConditionTest extends \PHPUnit_Framework_TestCase
{

    public function testEmptyValue()
    {
        $stringConditionWithNull = new StringCondition(null);
        $this->assertEquals(false, $stringConditionWithNull->conditionExists());
        $this->assertEquals(null, $stringConditionWithNull->getValue());

        $stringConditionWithEmptyString = new StringCondition('');
        $this->assertEquals(false, $stringConditionWithEmptyString->conditionExists());
        $this->assertEquals(null, $stringConditionWithEmptyString->getValue());
    }

    public function testValidValue()
    {
        $string = 'test';

        $stringConditionStringWithoutWhitespace = new StringCondition($string);
        $this->assertEquals(true, $stringConditionStringWithoutWhitespace->conditionExists());
        $this->assertEquals($string, $stringConditionStringWithoutWhitespace->getValue());

        $stringConditionStringWithWhitespace = new StringCondition($string . '  ');
        $this->assertEquals(true, $stringConditionStringWithWhitespace->conditionExists());
        $this->assertEquals($string, $stringConditionStringWithWhitespace->getValue());
    }


}
