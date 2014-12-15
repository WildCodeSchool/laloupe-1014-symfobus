<?php

namespace SimplonV\BusBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User implements UserInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $kidnom;

    /**
     * @var string
     */
    private $kidprenom;

    /**
     * @var string
     */
    private $kiddate;

    /**
     * @var string
     */
    private $kidecole;

    /**
     * @var string
     */
    private $kidclasse;

    /**
     * @var string
     */
    private $kidadresse;

    /**
     * @var string
     */
    private $kidcircuit;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $telfix;

    /**
     * @var string
     */
    private $telpro;

    /**
     * @var string
     */
    private $telmoblie;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set telfix
     *
     * @param string $telfix
     * @return User
     */
    public function setTelfix($telfix)
    {
        $this->telfix = $telfix;

        return $this;
    }

    /**
     * Get telfix
     *
     * @return string 
     */
    public function getTelfix()
    {
        return $this->telfix;
    }

    /**
     * Set telpro
     *
     * @param string $telpro
     * @return User
     */
    public function setTelpro($telpro)
    {
        $this->telpro = $telpro;

        return $this;
    }

    /**
     * Get telpro
     *
     * @return string 
     */
    public function getTelpro()
    {
        return $this->telpro;
    }

    /**
     * Set telmoblie
     *
     * @param string $telmoblie
     * @return User
     */
    public function setTelmoblie($telmoblie)
    {
        $this->telmoblie = $telmoblie;

        return $this;
    }

    /**
     * Get telmoblie
     *
     * @return string 
     */
    public function getTelmoblie()
    {
        return $this->telmoblie;
    }

    /**
     * Set kidnom
     *
     * @param string $kidnom
     * @return User
     */
    public function setkidnom($kidnom)
    {
        $this->kidnom = $kidnom;

        return $this;
    }

    /**
     * Get kidnom
     *
     *
     * @return string
     */
    public function getkidnom()
    {
        return $this->kidnom;
    }

    /**
     * Set kidprenom
     *
     * @param string $kidprenom
     * @return User
     */
    public function setkidprenom($kidprenom)
    {
        $this->kidnom = $kidprenom;

        return $this;
    }

    /**
     * Get kidprenom
     *
     *
     * @return string
     */
    public function getkidprenom()
    {
        return $this->kidprenom;
    }

    /**
     * Set kiddate
     *
     * @param string $kiddate
     * @return User
     */
    public function setkiddate($kiddate)
    {
        $this->kidnom = $kiddate;

        return $this;
    }

    /**
     * Get kiddate
     *
     *
     * @return string
     */
    public function getkiddate()
    {
        return $this->kiddate;
    }

    /**
     * Set kidecole
     *
     * @param string $kidecole
     * @return User
     */
    public function setkidecole($kidecole)
    {
        $this->kidnom = $kidecole;

        return $this;
    }

    /**
     * Get kidecole
     *
     *
     * @return string
     */
    public function getkidecole()
    {
        return $this->kidecole;
    }

    /**
     * Set kidclasse
     *
     * @param string $kidclasse
     * @return User
     */
    public function setkidclasse($kidclasse)
    {
        $this->kidnom = $kidclasse;

        return $this;
    }

    /**
     * Get kidclasse
     *
     *
     * @return string
     */
    public function getkidclasse()
    {
        return $this->kidclasse;
    }

    /**
     * Set kidadresse
     *
     * @param string $kidadresse
     * @return User
     */
    public function setkidadresse($kidadresse)
    {
        $this->kidnom = $kidadresse;

        return $this;
    }

    /**
     * Get kidadresse
     *
     *
     * @return string
     */
    public function getkidadresse()
    {
        return $this->kidadresse;
    }

    /**
     * Set kidcircuit
     *
     * @param string $kidcircuit
     * @return User
     */
    public function setkidcircuit($kidcircuit)
    {
        $this->kidnom = $kidcircuit;

        return $this;
    }

    /**
     * Get kidcircuit
     *
     *
     * @return string
     */
    public function getkidcircuit()
    {
        return $this->kidcircuit;
    }






































    /**
     * @var string
     */
    private $username;


    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    public function getRoles()
    {
        return array('ROLE_ADMIN');
    }

    public function getSalt()
    {
        return null;
    }

    public function eraseCredentials()
    {

    }

    public function equals(UserInterface $user)
    {
        return $user->getUsername() == $this->getUsername();
    }
}
