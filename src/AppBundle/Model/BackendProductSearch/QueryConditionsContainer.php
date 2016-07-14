<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 12.07.16
 * Time: 22:22
 */

namespace AppBundle\Model\BackendProductSearch;


/**
 * Class QueryConditionsContainer
 * @package AppBundle\Model\BackendProductSearch
 */
class QueryConditionsContainer
{
    /**
     * @var \SplObjectStorage
     */
    private $queryConditions;
    /**
     * @var string
     */
    private $defaultPrefix = 'p';

    /**
     * QueryConditionsContainer constructor.
     */
    public function __construct()
    {
        $this->queryConditions = new \SplObjectStorage();
    }

    /**
     * @param QueryConditionInterface $queryCondition
     */
    public function addQueryCondition(QueryConditionInterface $queryCondition)
    {
        if (!$this->queryConditions->contains($queryCondition)) {
            $queryCondition->setParameterPrefix($this->defaultPrefix);
            $this->queryConditions->attach($queryCondition);
        }
    }

    /**
     * @param QueryConditionInterface $queryCondition
     */
    public function removeQueryCondition(QueryConditionInterface $queryCondition)
    {
        if ($this->queryConditions->contains($queryCondition))
            $this->queryConditions->detach($queryCondition);
    }

    /**
     * @return \SplObjectStorage
     */
    public function getQueryConditions()
    {
        return $this->queryConditions;
    }

    /**
     * @param $prefix
     */
    public function setPrefixForQueryConditions($prefix)
    {
        foreach ($this->queryConditions as $queryCondition) {
            $queryCondition->setParameterPrefix($prefix);
        }
    }

    /**
     * @return bool
     */
    public function hasQueryConditions()
    {
        if($this->queryConditions->count() > 0)
            return true;

        return false;
    }
}