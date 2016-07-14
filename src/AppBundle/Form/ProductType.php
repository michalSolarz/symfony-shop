<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text')
            ->add('isVisible', 'checkbox')
            ->add('isAvailable', 'checkbox')
            ->add('onStockAmount', 'number')
            ->add('price', MoneyType::class)
            ->add('introduction', 'textarea')
            ->add('description', 'textarea');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product',
        ));
    }

    public function getName()
    {
        return 'app_bundle_product_type';
    }

}
