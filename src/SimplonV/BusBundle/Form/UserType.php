<?php

namespace SimplonV\BusBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text', array('label' => 'Identifiant' ))
            ->add('password', 'text', array('label' => 'Mots de Passe' ))
            ->add('email', 'text', array('label' => 'Adresse Email' ))
            ->add('nom', 'text', array('label' => 'Identifiant' ))
            ->add('prenom', 'text', array('label' => 'Prénom' ))
            ->add('adresse', 'text', array('label' => 'Adresse postal' ))
            ->add('telfix', 'text', array('label' => 'Téléphone domicile' ))
            ->add('telpro', 'text', array('label' => 'Téléphone professionnelle' ))
            ->add('telmoblie', 'text', array('label' => 'Téléphone portable' ))
            ->add('kidnom', 'text', array('label' => 'Nom enfant' ))
            ->add('kidprenom', 'text', array('label' => 'Prenom enfant' ))
            ->add('kiddate', 'text', array('label' => 'Date de b' ))
            ->add('kidecole', 'text', array('label' => 'Nom ecole' ))
            ->add('kidclasse', 'text', array('label' => 'Classe enfant' ))
            ->add('kidadresse', 'text', array('label' => 'Adresse domicile' ))
            ->add('kidcircuit', 'text', array('label' => 'Circuit' ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SimplonV\BusBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'simplonv_busbundle_user';
    }
}
