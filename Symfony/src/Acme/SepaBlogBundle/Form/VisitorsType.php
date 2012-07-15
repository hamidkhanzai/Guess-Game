<?php

namespace Acme\SepaBlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class VisitorsType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('first')
            ->add('second')
            ->add('third')
        ;
    }

    public function getName()
    {
        return 'acme_sepablogbundle_visitorstype';
    }
}
