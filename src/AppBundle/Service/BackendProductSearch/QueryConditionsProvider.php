<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 12.07.16
 * Time: 23:10
 */

namespace AppBundle\Service\BackendProductSearch;


use AppBundle\Model\BackendProductSearch\EqualQueryCondition;
use AppBundle\Model\BackendProductSearch\ExactLikeParameter;
use AppBundle\Model\BackendProductSearch\ExactParameter;
use AppBundle\Model\BackendProductSearch\LikeQueryCondition;
use AppBundle\Model\BackendProductSearch\ProductSearchConditions;
use AppBundle\Model\BackendProductSearch\QueryConditionsContainer;
use Doctrine\ORM\EntityManager;

/**
 * Class QueryConditionsProvider
 * @package AppBundle\Service\BackendProductSearch
 */
class QueryConditionsProvider
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * QueryConditionsProvider constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param ProductSearchConditions $productSearchConditions
     * @return QueryConditionsContainer
     */
    public function getQueryConditionsFromProductSearchConditions(ProductSearchConditions $productSearchConditions)
    {
        $queryBuilder = $this->entityManager->createQueryBuilder();
        $queryConditionsContainer = new QueryConditionsContainer();

        if ($productSearchConditions->hasProductName()) {
            $parameter = new ExactLikeParameter('name', 'productName', $productSearchConditions->getProductName());
            $likeQuery = new LikeQueryCondition($queryBuilder, $parameter);
            $queryConditionsContainer->addQueryCondition($likeQuery);
        }
        if ($productSearchConditions->hasProductIsVisible()) {
            $parameter = new ExactParameter('isVisible', 'productIsVisible', $productSearchConditions->getProductIsVisible());
            $equalQuery = new EqualQueryCondition($queryBuilder, $parameter);
            $queryConditionsContainer->addQueryCondition($equalQuery);
        }
        if ($productSearchConditions->hasProductIsAvailable()) {
            $parameter = new ExactParameter('isAvailable', 'productIsAvailable', $productSearchConditions->getProductIsAvailable());
            $equalQuery = new EqualQueryCondition($queryBuilder, $parameter);
            $queryConditionsContainer->addQueryCondition($equalQuery);
        }
        if ($productSearchConditions->hasProductIntroduction()) {
            $parameter = new ExactLikeParameter('introduction', 'productIntroduction', $productSearchConditions->getProductIntroduction());
            $equalQuery = new LikeQueryCondition($queryBuilder, $parameter);
            $queryConditionsContainer->addQueryCondition($equalQuery);
        }
        if ($productSearchConditions->hasProductDescription()) {
            $parameter = new ExactLikeParameter('description', 'productDescription', $productSearchConditions->getProductDescription());
            $equalQuery = new LikeQueryCondition($queryBuilder, $parameter);
            $queryConditionsContainer->addQueryCondition($equalQuery);
        }
        return $queryConditionsContainer;
    }

}