<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 13.07.16
 * Time: 22:45
 */

namespace AppBundle\Model\BackendProductSearch;


/**
 * Class QueryParameter
 * @package AppBundle\Model\BackendProductSearch
 */
abstract class QueryParameter implements QueryParameterInterface
{
    /**
     * @var string
     */
    private $parameterName;
    /**
     * @var string
     */
    private $parameterAlias;
    /**
     * @var mixed
     */
    protected $parameterValue;
    /**
     * @var string
     */
    private $prefix = '';

    /**
     * QueryParameter constructor.
     * @param $parameterName
     * @param $parameterAlias
     * @param $parameterValue
     */
    public function __construct($parameterName, $parameterAlias, $parameterValue)
    {
        $this->parameterName = (string)$parameterName;
        $this->parameterAlias = (string)$parameterAlias;
        $this->parameterValue = $parameterValue;
    }

    /**
     * @param $prefix
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
    }

    /**
     * @return string
     */
    public function getParameterName()
    {
        return "{$this->prefix}.{$this->parameterName}";
    }

    /**
     * @return mixed
     */
    public function getParameterAlias()
    {
        return $this->parameterAlias;
    }

    /**
     * @return mixed
     */
    public function getParameterValue()
    {
        return $this->parameterValue;
    }
}