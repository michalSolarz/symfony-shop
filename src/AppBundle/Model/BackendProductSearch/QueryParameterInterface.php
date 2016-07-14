<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 12.07.16
 * Time: 22:47
 */

namespace AppBundle\Model\BackendProductSearch;


/**
 * Interface QueryParameterInterface
 * @package AppBundle\Model\BackendProductSearch
 */
interface QueryParameterInterface
{
    /**
     * QueryParameterInterface constructor.
     * @param $parameterName
     * @param $parameterAlias
     * @param $parameterValue
     */
    public function __construct($parameterName, $parameterAlias, $parameterValue);

    /**
     * @param $prefix
     */
    public function setPrefix($prefix);

    /**
     * @return mixed
     */
    public function getParameterName();

    /**
     * @return mixed
     */
    public function getParameterAlias();

    /**
     * @return mixed
     */
    public function getParameterValue();
}