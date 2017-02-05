<?php
namespace Gstay\hotelBundle\Entity;

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02/02/2017
 * Time: 20:56
 */
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Hotel
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     */
    private $id_user ;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $name;
    /**
     * @ORM\Column(type="float"),nullable=true
     */
    private $stars;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $phone;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $map_link;
    /**
     * @ORM\Column(type="date",nullable=true)
     */
    private $date_built;
    /**
     * @ORM\Column(type="date",nullable=true)
     */
    private $date_inscrit;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $country;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $gouvernorat;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $description;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $architecture;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $matricule_fiscale;
    /**

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * @param mixed $stars
     */
    public function setStars($stars)
    {
        $this->stars = $stars;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getMapLink()
    {
        return $this->map_link;
    }

    /**
     * @param mixed $map_link
     */
    public function setMapLink($map_link)
    {
        $this->map_link = $map_link;
    }

    /**
     * @return mixed
     */
    public function getDateBuilt()
    {
        return $this->date_built;
    }

    /**
     * @param mixed $date_built
     */
    public function setDateBuilt($date_built)
    {
        $this->date_built = $date_built;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getArchitecture()
    {
        return $this->architecture;
    }

    /**
     * @param mixed $architecture
     */
    public function setArchitecture($architecture)
    {
        $this->architecture = $architecture;
    }

    /**
     * @return mixed
     */
    public function getMatriculeFiscale()
    {
        return $this->matricule_fiscale;
    }

    /**
     * @param mixed $matricule_fiscale
     */
    public function setMatriculeFiscale($matricule_fiscale)
    {
        $this->matricule_fiscale = $matricule_fiscale;
    }

    /**
     * @return mixed
     */
    public function getDateInscrit()
    {
        return $this->date_inscrit;
    }

    /**
     * @param mixed $date_inscrit
     */
    public function setDateInscrit($date_inscrit)
    {
        $this->date_inscrit = $date_inscrit;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getGouvernorat()
    {
        return $this->gouvernorat;
    }

    /**
     * @param mixed $gouvernorat
     */
    public function setGouvernorat($gouvernorat)
    {
        $this->gouvernorat = $gouvernorat;
    }




}