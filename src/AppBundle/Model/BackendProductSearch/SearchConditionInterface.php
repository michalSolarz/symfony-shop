<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 07.07.16
 * Time: 07:12
 */

namespace AppBundle\Model\BackendProductSearch;


/**
 * Interface SearchConditionInterface
 * @package AppBundle\Model
 */
interface SearchConditionInterface
{
    /**
     * SearchConditionInterface constructor.
     * @param $value
     */
    public function __construct($value);

    /**
     * @return mixed
     */
    public function conditionExists();

    /**
     * @return mixed
     */
    public function getValue();
}