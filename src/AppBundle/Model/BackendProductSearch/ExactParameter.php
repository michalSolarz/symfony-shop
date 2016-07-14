<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 13.07.16
 * Time: 20:03
 */

namespace AppBundle\Model\BackendProductSearch;


/**
 * Class ExactParameter
 * @package AppBundle\Model\BackendProductSearch
 */
class ExactParameter extends QueryParameter
{
    /**
     * @return mixed
     */
    public function getParameterValue()
    {
        return $this->parameterValue;
    }
}