<?php

namespace App\Form;

use App\Entity\Livreur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Validator\Constraints\Image;

class LivreurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('num')
            ->add('nomLiv', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le champ nom est obligatoire'
                    ]),
                    new Assert\Length([
                        'max' => 12,
                        'maxMessage' => 'Le nom ne doit pas dépasser  12 caractères.'
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'maxMessage' => 'Le nom ne doit pas etre inferieur à 4  caractères.'
                    ])
                ]])
            ->add('prenomLiv', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le champ prenom est obligatoire'
                    ]),
                    new Assert\Length([
                        'max' => 12,
                        'maxMessage' => 'Le prenom ne doit pas dépasser  12 caractères.'
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'maxMessage' => 'Le prenom ne doit pas etre inferieur à 4  caractères.'
                    ])
                ]])
            ->add('localisation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livreur::class,
        ]);
    }
}
