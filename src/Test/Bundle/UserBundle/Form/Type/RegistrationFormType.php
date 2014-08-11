<?php

namespace Test\Bundle\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder->add('forename', 'text')
            ->add('surname', 'text');
    }
    
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'test_user_registration';
    }
}

