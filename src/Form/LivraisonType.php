<?php

namespace App\Form;

use App\Entity\Livraison;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Validator\Constraints\Image;

class LivraisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateLiv')
            ->add('typeLiv', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le champ type est obligatoire'
                    ]),
                    new Assert\Length([
                        'max' => 12,
                        'maxMessage' => 'Le type ne doit pas dépasser  12 caractères.'
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'maxMessage' => 'Le type ne doit pas etre inferieur à 4  caractères.'
                    ])
                ]])
            ->add('adressLiv', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le champ adresse est obligatoire'
                    ]),
                    new Assert\Length([
                        'max' => 12,
                        'maxMessage' => 'Le adresse ne doit pas dépasser  12 caractères.'
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'maxMessage' => 'Le adresse ne doit pas etre inferieur à 4  caractères.'
                    ])
                ]])
            ->add('produit')
            ->add('idClient', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email',
                'label' => 'Email'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livraison::class,
        ]);
    }
}
