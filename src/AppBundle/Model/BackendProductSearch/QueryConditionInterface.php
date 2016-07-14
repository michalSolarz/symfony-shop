<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 12.07.16
 * Time: 22:21
 */

namespace AppBundle\Model\BackendProductSearch;


use Doctrine\ORM\QueryBuilder;

/**
 * Interface QueryConditionInterface
 * @package AppBundle\Model\BackendProductSearch
 */
interface QueryConditionInterface
{
    /**
     * QueryConditionInterface constructor.
     * @param QueryBuilder $queryBuilder
     * @param QueryParameterInterface $queryParameter
     */
    public function __construct(QueryBuilder $queryBuilder, QueryParameterInterface $queryParameter);

    /**
     * @return mixed
     */
    public function getQueryExpression();

    /**
     * @return mixed
     */
    public function getParameter();

    /**
     * @param $prefix
     * @return mixed
     */
    public function setParameterPrefix($prefix);
}