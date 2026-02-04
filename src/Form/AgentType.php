<?php

namespace App\Form;

use App\Entity\Agent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class AgentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom de l\'agent',
                'attr' => [
                    'placeholder' => 'Ex: Ash, Thermite, Sledge...',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom de l\'agent est obligatoire']),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 255,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('role', ChoiceType::class, [
                'label' => 'Rôle',
                'choices' => [
                    'Attaquant' => 'Attaquant',
                    'Défenseur' => 'Défenseur',
                ],
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le rôle est obligatoire'])
                ]
            ])
            ->add('speed', IntegerType::class, [
                'label' => 'Vitesse',
                'attr' => [
                    'min' => 1,
                    'max' => 3,
                    'class' => 'form-control',
                    'placeholder' => '1, 2 ou 3'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La vitesse est obligatoire']),
                    new Assert\Range([
                        'min' => 1,
                        'max' => 3,
                        'notInRangeMessage' => 'La vitesse doit être entre {{ min }} et {{ max }}'
                    ])
                ]
            ])
            ->add('armor', IntegerType::class, [
                'label' => 'Armure',
                'attr' => [
                    'min' => 1,
                    'max' => 3,
                    'class' => 'form-control',
                    'placeholder' => '1, 2 ou 3'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'armure est obligatoire']),
                    new Assert\Range([
                        'min' => 1,
                        'max' => 3,
                        'notInRangeMessage' => 'L\'armure doit être entre {{ min }} et {{ max }}'
                    ])
                ]
            ])
            ->add('gadget', TextareaType::class, [
                'label' => 'Gadget',
                'attr' => [
                    'rows' => 3,
                    'class' => 'form-control',
                    'placeholder' => 'Décrivez le gadget de l\'agent...'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le gadget est obligatoire']),
                    new Assert\Length([
                        'min' => 10,
                        'minMessage' => 'La description du gadget doit contenir au moins {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'rows' => 5,
                    'class' => 'form-control',
                    'placeholder' => 'Description générale de l\'agent...'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La description est obligatoire']),
                    new Assert\Length([
                        'min' => 20,
                        'minMessage' => 'La description doit contenir au moins {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('image', TextType::class, [
                'label' => 'URL de l\'image',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'https://exemple.com/image.jpg'
                ],
                'constraints' => [
                    new Assert\Url(['message' => 'L\'URL de l\'image n\'est pas valide'])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Agent::class,
        ]);
    }
}