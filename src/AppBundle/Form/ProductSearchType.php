<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('productName', TextType::class, array(
                'required' => false,
            ))
            ->add('productIsVisible', TripleChoiceType::class, array(
                'required' => false,
            ))
            ->add('productIsAvailable', TripleChoiceType::class, array(
                'required' => false,
            ))
            ->add('productIntroduction', 'text', array(
                'required' => false,
            ))
            ->add('productDescription', 'text', array(
                'required' => false,
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
        ));

    }

    public function getName()
    {
        return null;
    }
}
