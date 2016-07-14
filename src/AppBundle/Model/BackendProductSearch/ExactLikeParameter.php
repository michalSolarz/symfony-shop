<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 12.07.16
 * Time: 23:16
 */

namespace AppBundle\Model\BackendProductSearch;


/**
 * Class ExactLikeParameter
 * @package AppBundle\Model\BackendProductSearch
 */
class ExactLikeParameter extends QueryParameter
{
    /**
     * @return string
     */
    public function getParameterValue()
    {
        return "%{$this->parameterValue}%";
    }

}