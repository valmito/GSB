<?php

namespace App\Form;

use App\Entity\Etat;
use App\Entity\FicheFrais;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TexteareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ValiderFicheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('mois')
            //->add('dateModif')
            //->add('idComptable')
            //->add('idVisiteur')
            ->add('nbJustificatifs',NumberType::class,array('required'=>true,'data' => $Fiche['nbJustificatifs']))
            ->add('montantValide', NumberType::class,array('required'=>true,'data' => $Fiche['montantValide']))
            ->add('situation', EntityType::class,array('class'=>Etat::class,'required'=>true,'choice_label'=>'libelle'))
            ->add('valider',SubmitType::class)
            ->add('annuler',ResetType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FicheFrais::class,
        ]);
    }
}
