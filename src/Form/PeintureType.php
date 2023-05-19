<?php

namespace App\Form;

use App\Entity\Peinture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PeintureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('largeur')
            ->add('Hauteur')
            ->add('en_vente')
            ->add('prix')
            ->add('date_realisation')
            ->add('description')
            ->add('listeCategoire')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Peinture::class,
        ]);
    }
}
