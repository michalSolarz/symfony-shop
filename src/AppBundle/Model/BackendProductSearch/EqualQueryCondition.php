<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 13.07.16
 * Time: 19:59
 */

namespace AppBundle\Model\BackendProductSearch;


use Doctrine\ORM\QueryBuilder;

/**
 * Class EqualQueryCondition
 * @package AppBundle\Model\BackendProductSearch
 */
class EqualQueryCondition implements QueryConditionInterface
{
    /**
     * @var QueryBuilder
     */
    private $queryBuilder;
    /**
     * @var QueryParameterInterface
     */
    private $queryParameter;

    /**
     * EqualQueryCondition constructor.
     * @param QueryBuilder $queryBuilder
     * @param QueryParameterInterface $queryParameter
     */
    public function __construct(QueryBuilder $queryBuilder, QueryParameterInterface $queryParameter)
    {
        $this->queryBuilder = $queryBuilder;
        $this->queryParameter = $queryParameter;
    }

    /**
     * @return \Doctrine\ORM\Query\Expr\Comparison
     */
    public function getQueryExpression()
    {
        return $this->queryBuilder->expr()->eq($this->queryParameter->getParameterName(), ":{$this->queryParameter->getParameterAlias()}");
    }

    /**
     * @return QueryParameterInterface
     */
    public function getParameter()
    {
        return $this->queryParameter;
    }

    /**
     * @param $prefix
     * @return void
     */
    public function setParameterPrefix($prefix)
    {
        $this->queryParameter->setPrefix($prefix);
    }
}