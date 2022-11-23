<?php

namespace App\Form;


use App\Entity\Cours;
use App\Entity\Test;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestType extends abstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomT')
            ->add('dateT')
            ->add('dureT')
            ->add('idCours',EntityType::class,['class'=>Cours::class,'choice_label'=>'idCours'])
            ->add('id_user',EntityType::class,['class'=>User::class,'choice_label'=>'id_user'])
            ->add('ajouter',SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Test::class,
        ]);
    }

}