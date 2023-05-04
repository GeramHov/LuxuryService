<?php

namespace App\Form;

use App\Entity\Candidates;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidatesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('gender')
            ->add('address')
            ->add('country')
            ->add('nationality')
            ->add('passport')
            ->add('passportFile')
            ->add('resume')
            ->add('profileImage')
            ->add('currentLocation')
            ->add('birthdate')
            ->add('birthLocation')
            ->add('email')
            ->add('password')
            ->add('availability')
            ->add('experience')
            ->add('shortDescription')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('deletedAt')
            ->add('isDeleted')
            ->add('file')
            ->add('jobCategory')
            ->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidates::class,
        ]);
    }
}
