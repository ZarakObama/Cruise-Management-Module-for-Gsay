<?php
namespace Gstay\eventBundle\Entity;
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM ;
/**
 * Created by PhpStorm.
 * User: HD_EXECUTION
 * Date: 01/02/2017
 * Time: 22:56
 */

/**
 * @ORM\Entity
 */
class evenement
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id ;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="evenement")
     * @ORM\JoinColumn(name="id_organisateur", referencedColumnName="id")
     */
    private $id_organisateur ;
//id_hotel
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $titre;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $theme;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $planing;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $lieu;
    /**
     * @ORM\Column(type="integer")
     */
    private $nbpasse;
    /**
     * @ORM\Column(type="date")
     */
    private $date_debut;
    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     *@ORM\Column(type="integer")
     */
    private $conditionpromo;
    /**
     *@ORM\Column(type="string",length=255,options={"default" : "en attente"})
     */
    private $promo;

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
    public function getIdOrganisateur()
    {
        return $this->id_organisateur;
    }

    /**
     * @param mixed $id_organisateur
     */
    public function setIdOrganisateur($id_organisateur)
    {
        $this->id_organisateur = $id_organisateur;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
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
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param mixed $theme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return mixed
     */
    public function getPlaning()
    {
        return $this->planing;
    }

    /**
     * @param mixed $planing
     */
    public function setPlaning($planing)
    {
        $this->planing = $planing;
    }

    /**
     * @return mixed
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param mixed $lieu
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * @return mixed
     */
    public function getNbpasse()
    {
        return $this->nbpasse;
    }

    /**
     * @param mixed $nbpasse
     */
    public function setNbpasse($nbpasse)
    {
        $this->nbpasse = $nbpasse;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * @param mixed $date_debut
     */
    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getConditionpromo()
    {
        return $this->conditionpromo;
    }

    /**
     * @param mixed $conditionpromo
     */
    public function setConditionpromo($conditionpromo)
    {
        $this->conditionpromo = $conditionpromo;
    }

    /**
     * @return mixed
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * @param mixed $promo
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;
    }




}

