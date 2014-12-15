<?php

// src/SimplonV/BusBundle/Admin/UserAdmin.php

namespace SimplonV\BusBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends Admin
{
    // setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'nom'
    );

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', 'text', array('label' => 'Identifiant' ))
            ->add('password', 'text', array('label' => 'Mots de Passe' ))
            ->add('email', 'text', array('label' => 'Adresse Email' ))
            ->add('nom', 'text', array('label' => 'Identifiant' ))
            ->add('prenom', 'text', array('label' => 'Prénom' ))
            ->add('adresse', 'text', array('label' => 'Adresse postal' ))
            ->add('telfix', 'text', array('label' => 'Téléphone domicile' ))
            ->add('telpro', 'text', array('label' => 'Téléphone professionnelle' ))
            ->add('telmoblie', 'text', array('label' => 'Téléphone portable' ))
        ;
    }
        protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nom')
            ->add('email')
            ->add('password')
        ;
    }
}