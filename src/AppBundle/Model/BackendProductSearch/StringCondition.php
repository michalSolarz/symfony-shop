<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 07.07.16
 * Time: 07:11
 */

namespace AppBundle\Model\BackendProductSearch;


/**
 * Class StringCondition
 * @package AppBundle\Model
 */
class StringCondition implements SearchConditionInterface
{
    /**
     * @var string
     */
    private $value;

    /**
     * StringCondition constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = trim((string)$value);
    }

    /**
     * @return bool
     */
    public function conditionExists()
    {
        if (is_null($this->value))
            return false;

        if (!(strlen($this->value) > 0))
            return false;

        return true;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}