<?php

namespace AppBundle\Form;

use AppBundle\Entity\ValueObject\Money;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\DataMapperInterface;
use Symfony\Component\Form\Exception;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MoneyType extends AbstractType implements DataMapperInterface
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('amount', 'money', array(
                'divisor' => Money::DIVISOR,
            ))
            ->add('currency', 'choice', array(
                'choices' => Money::getCurrencies(),
            ))
            ->setDataMapper($this);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ValueObject\Money',
            'empty_data' => null,
        ));
    }

    public function getName()
    {
        return 'app_bundle_money_type';
    }

    public function mapDataToForms($data, $forms)
    {
        $forms = iterator_to_array($forms);
        $forms['amount']->setData($data ? $data->getAmount() : 0);
        $forms['currency']->setData($data ? $data->getCurrency() : 'PLN');
    }

    public function mapFormsToData($forms, &$data)
    {
        $forms = iterator_to_array($forms);
        $data = new Money(
            $forms['amount']->getData(),
            $forms['currency']->getData()
        );
    }
}
