<?php

namespace IINCORE\webBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email');
        $builder->add('message', 'textarea');
        $builder->add('name', 'text');
        $builder->add('phone', 'text');
        $builder->add('subject', 'text');
    }

    public function getName()
    {
        return 'contact';
    }
}
