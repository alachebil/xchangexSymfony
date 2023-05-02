<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\Image;


class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
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
                ]),
                new Assert\Regex([
                    'pattern' => '/^[a-zA-Zé\s]*$/',
                    'message' => 'Le nom ne doit contenir que des lettres.'
                ])
            ]])
            ->add('imageFile', FileType::class, [
                'label' => 'Photo',
                'required' => false,
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
            ])
                ->add('decription', TextType::class , [
                    'constraints' => [
                        new NotBlank([
                            'message' => ' Le champ description est obligatoire '
                        ])
                    ]
                ])
                ->add('prix', MoneyType::class, [
                    'currency' => 'TND',
                    'constraints' => [
                        new Assert\Regex([
                            'pattern' => '/^[0-9]+$/',
                            'message' => 'Le prix ne doit contenir que des chiffres'
                        ])
                    ]
                ])
            ->add('nomCategori')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
