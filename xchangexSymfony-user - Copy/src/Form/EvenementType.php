<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;


use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Validator\Constraints\Image;



class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomEvent', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le champ nom est obligatoire'
                    ]),
                    new Assert\Length([
                        'max' => 12,
                        'maxMessage' => 'Le nom ne doit pas dépasser  12 caractères.'
                    ]),
                    new Assert\Length([
                        'min' => 4,
                        'maxMessage' => 'Le nom ne doit pas etre inferieur à 4  caractères.'
                    ])
                ]])
            ->add('typeEvent')
            ->add('date')
            ->add('imageEvent',FileType::class, array('data_class' => null,'required' => false,
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez télécharger une image'
                ]),
                new Image([
                    'maxSize' => '2M',
                    'maxSizeMessage' => 'La taille de l\'image ne doit pas dépasser 2 Mo',
                    'mimeTypes' => [
                        'image/jpeg',
                        'image/png'
                    ],
                    'mimeTypesMessage' => 'Le format de l\'image doit être JPEG ou PNG'
                ])
            ]
            ))
            ->add('descriptionEvent', TextType::class , [
                'constraints' => [
                    new NotBlank([
                        'message' => ' Le champ description est obligatoire '
                    ])
                ]
            ])
            ->add('nbParticipants')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
