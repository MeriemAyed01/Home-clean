<?php

namespace App\Form;

use App\Entity\Ordre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrdreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Location')
            ->add('Package')
            ->add('Date')
            ->add('Time')
            ->add('Status')
            ->add('typePaiement')
            ->add('User')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ordre::class,
        ]);
    }
}
