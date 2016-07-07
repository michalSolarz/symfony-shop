<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 07.07.16
 * Time: 07:11
 */

namespace AppBundle\Model\BackendProductSearch;


/**
 * Class BooleanCondition
 * @package AppBundle\Model
 */
class BooleanCondition implements SearchConditionInterface
{
    /**
     *
     */
    const YES_VALUE = 1;
    /**
     *
     */
    const NO_VALUE = -1;

    /**
     * @var bool|null
     */
    private $value;

    /**
     * BooleanCondition constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $this->convertValueToBoolean($value);
    }

    /**
     * @return bool
     */
    public function conditionExists()
    {
        if(!is_null($this->value))
            return true;

        return false;
    }

    /**
     * @return bool|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param $value
     * @return bool|null
     */
    private function convertValueToBoolean($value)
    {
        if (is_null($value) || !in_array((integer)$value, array(self::YES_VALUE, self::NO_VALUE)))
            return null;

        $value = (integer)$value;
        if ($value === self::YES_VALUE)
            return true;

        if ($value === self::NO_VALUE)
            return false;

        return null;
    }
}