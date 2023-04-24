<?php

namespace App\Form;

use App\Entity\Participation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Evenement;
use App\Entity\User;

class ParticipationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idUser',EntityType::class,['class'=> User::class,
            'choice_label'=>'email',
            'label'=>'User Email'])
            ->add('datePart')
            ->add('idEvenement',EntityType::class,['class'=> Evenement::class,
            'choice_label'=>'nomEvent',
            'label'=>'Nom de l\'événement'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participation::class,
        ]);
    }
}
