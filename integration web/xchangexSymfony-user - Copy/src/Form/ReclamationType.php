<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use App\Entity\Echange;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
       
        $builder
            ->add('idEchange',EntityType::class,['class'=> Echange::class,
            'choice_label'=>'username',
            'label'=>'NomEchange'])
            ->add('etatRec', ChoiceType::class, [
                'choices' => [
                    'Attente' => 'Attente',
                    'Traitée' => 'Traitée',
                ],
            ])

           // ->add('dateReclamation')
            ->add('imageEvent',FileType::class, array('data_class' => null,'required' => false))
            ->add('descriptionReclamation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
