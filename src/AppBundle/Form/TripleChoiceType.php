<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 06.07.16
 * Time: 23:10
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TripleChoiceType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'choices' => array(
                    1 => 'Yes',
                    -1 => 'No',
                ),
                'data' => 0,
            )
        );
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}