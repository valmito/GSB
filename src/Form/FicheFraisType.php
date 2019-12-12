<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HTTPFoundation\Session\Response;
use Symfony\Component\HTTPFoundation\Session\Request;
use App\Entity\Comptable;
use App\Entity\Visiteur;
use App\Entity\Etat;
use App\Entity\FicheFrais;

class FicheFraisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            
            //->add('idComptable', TextType::class,array('label'=>"L'identifiant du visiteur",'required'=>true))
            //->add('mois',NumberType::class,array('label'=>'mois','required'=>true))
            ->add('nbJustificatifs',NumberType::class,array('label'=>'Nombre de justificatifs','required'=>true))
            ->add('montantValide', NumberType::class,array('label'=>'Le montant valide','required'=>true))
            //->add('dateModif', TextType::class,array('label'=>'La date de modification','required'=>true))
            //->add('idVisiteur', EntityType::class,array('class'=>Visiteur::class,'label'=>'Choisir le visiteur : ','required'=>true,'choice_label'=>'nom'))
            //->add('RepasMidi',TextType::class,array('label'=>'','required'=>true))
            //->add('Nuit',TextType::class,array('label'=>'','required'=>true))
            //->add('Etape',TextType::class,array('label'=>'','required'=>true))
            //->add('Km',TextType::class,array('label'=>'','required'=>true))
            //->add('situation', EntityType::class,array('class'=>Etat::class,'required'=>true,'choice_label'=>'libelle'))
            ->add('valider',SubmitType::class)
            ->add('annuler',ResetType::class)
        ;
         
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}