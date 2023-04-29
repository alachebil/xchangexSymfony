<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UpdateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('adresse', ChoiceType::class, [


                'choices' => [
                    'tunis' => 'tunis',
                    'ben arous' => 'ben arous',
                    'manouba' => 'manouba',
                    'ariana' => 'ariana',
                    'zaghouan' => 'zaghouan',
                    'beja' => 'beja',
                    'kef' => 'kef',
                    'nabeul' => 'nabeul',
                    'bizert' => 'bizert',

                ],

            ])
            ->add('num_tel')
            ->add('email')



            ->add('rolle', ChoiceType::class, [


                'choices' => [
                    'Client' => 'ROLE_USER',
                    'Admin' => 'ROLE_ADMIN'
                ],

            ])
            ->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
