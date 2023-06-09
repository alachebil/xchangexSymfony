<?php

namespace App\Form;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomCategorie', TextType::class, [
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}
