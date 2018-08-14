<?php

namespace AppBundle\Form\Extension;

use Sylius\Bundle\CustomerBundle\Form\Type\CustomerProfileType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class CustomerProfileTypeExtension extends AbstractTypeExtension
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // Adding new fields works just like in the parent form type.
        $builder->add('contactHours', TextType::class, [
            'required' => false,
            'label' => 'app.form.customer.contact_hours',
        ]);

        // To remove a field from a form simply call ->remove(`fieldName`).
        $builder->remove('gender');

        // You can change the label by adding again the same field with a changed `label` parameter.
        $builder->add('lastName', TextType::class, [
            'label' => 'app.form.customer.surname',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType(): string
    {
        return CustomerProfileType::class;
    }
}