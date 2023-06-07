<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('votre_nom', TextType::class, [
                'label' => 'Votre nom',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre nom'
                ]
            ])

            ->add('votre_email', TextType::class, [
                'label' => 'Votre email',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre email'
                ]
            ])
            
            ->add('votre_telephone', TextType::class, [
                'label' => 'Votre téléphone',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre téléphone'
                ]
            ])

            ->add('votre_adresse', TextType::class, [
                'label' => 'Votre adresse, code postal, ville et pays',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre adresse, code postal, ville et pays'
                ]
            ])

            ->add('votre_message', TextareaType::class, [
                'label' => 'Votre message',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre message'
                ]
            ])
            ->add('envoyer', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
