<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 02/02/2017
 * Time: 22:03
 */

namespace Gstay\guesthostBundle\Entity;



use Doctrine\ORM\Mapping as ORM ;


/**
 * @ORM\Entity
 */
class Equipement
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */

    private $idequipement;

    /**
     * @ORM\ManyToOne(targetEntity="Logement", inversedBy="Equipement")
     * @ORM\JoinColumn(name="idequiplogement", referencedColumnName="idlogement")
     */

    private $idequiplogement;

    /**
     * @ORM\Column(type="integer",options={"default" : "0"})
     */
    private $parking;
    /**
     * @ORM\Column(type="integer",options={"default" : "0"})
     */
    private $cuisine;
    /**
     * @ORM\Column(type="integer",options={"default" : "0"})
     */
    private $wifi;

    /**
     * @ORM\Column(type="integer",options={"default" : "0"})
     */

    private $Machinelaver;

    /**
     * @ORM\Column(type="integer",options={"default" : "0"})
     */

    private $Ascenseur;

    /**
     * @ORM\Column(type="integer",options={"default" : "0"})
     */

    private $Interphone;

    /**
     * @ORM\Column(type="integer",options={"default" : "0"})
     */

    private $Television;

    /**
     * @ORM\Column(type="integer",options={"default" : "0"})
     */

    private $Piscine;

    /**
     * @ORM\Column(type="integer",options={"default" : "0"})
     */

    private $Jacuzzi;


    /**
     * @ORM\Column(type="integer",options={"default" : "0"})
     */

    private $Climatisation;

    /**
     * @ORM\Column(type="integer",options={"default" : "0"})
     */

    private $Chauffage;

    /**
     * @ORM\Column(type="integer",options={"default" : "0"})
     */

    private $Cintres; //me3la9

    /**
     * @ORM\Column(type="integer",options={"default" : "0"})
     */

    private $Ferarepasser;

    /**
     * @return mixed
     */
    public function getIdequipement()
    {
        return $this->idequipement;
    }

    /**
     * @param mixed $idequipement
     */
    public function setIdequipement($idequipement)
    {
        $this->idequipement = $idequipement;
    }

    /**
     * @return mixed
     */
    public function getIdLogement()
    {
        return $this->id_logement;
    }

    /**
     * @param mixed $id_logement
     */
    public function setIdLogement($id_logement)
    {
        $this->id_logement = $id_logement;
    }

    /**
     * @return mixed
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * @param mixed $parking
     */
    public function setParking($parking)
    {
        $this->parking = $parking;
    }

    /**
     * @return mixed
     */
    public function getCuisine()
    {
        return $this->cuisine;
    }

    /**
     * @param mixed $cuisine
     */
    public function setCuisine($cuisine)
    {
        $this->cuisine = $cuisine;
    }

    /**
     * @return mixed
     */
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * @param mixed $wifi
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
    }

    /**
     * @return mixed
     */
    public function getMachinelaver()
    {
        return $this->Machinelaver;
    }

    /**
     * @param mixed $Machinelaver
     */
    public function setMachinelaver($Machinelaver)
    {
        $this->Machinelaver = $Machinelaver;
    }

    /**
     * @return mixed
     */
    public function getAscenseur()
    {
        return $this->Ascenseur;
    }

    /**
     * @param mixed $Ascenseur
     */
    public function setAscenseur($Ascenseur)
    {
        $this->Ascenseur = $Ascenseur;
    }

    /**
     * @return mixed
     */
    public function getInterphone()
    {
        return $this->Interphone;
    }

    /**
     * @param mixed $Interphone
     */
    public function setInterphone($Interphone)
    {
        $this->Interphone = $Interphone;
    }

    /**
     * @return mixed
     */
    public function getTelevision()
    {
        return $this->Television;
    }

    /**
     * @param mixed $Television
     */
    public function setTelevision($Television)
    {
        $this->Television = $Television;
    }

    /**
     * @return mixed
     */
    public function getPiscine()
    {
        return $this->Piscine;
    }

    /**
     * @param mixed $Piscine
     */
    public function setPiscine($Piscine)
    {
        $this->Piscine = $Piscine;
    }

    /**
     * @return mixed
     */
    public function getJacuzzi()
    {
        return $this->Jacuzzi;
    }

    /**
     * @param mixed $Jacuzzi
     */
    public function setJacuzzi($Jacuzzi)
    {
        $this->Jacuzzi = $Jacuzzi;
    }

    /**
     * @return mixed
     */
    public function getClimatisation()
    {
        return $this->Climatisation;
    }

    /**
     * @param mixed $Climatisation
     */
    public function setClimatisation($Climatisation)
    {
        $this->Climatisation = $Climatisation;
    }

    /**
     * @return mixed
     */
    public function getChauffage()
    {
        return $this->Chauffage;
    }

    /**
     * @param mixed $Chauffage
     */
    public function setChauffage($Chauffage)
    {
        $this->Chauffage = $Chauffage;
    }

    /**
     * @return mixed
     */
    public function getCintres()
    {
        return $this->Cintres;
    }

    /**
     * @param mixed $Cintres
     */
    public function setCintres($Cintres)
    {
        $this->Cintres = $Cintres;
    }

    /**
     * @return mixed
     */
    public function getFerarepasser()
    {
        return $this->Ferarepasser;
    }

    /**
     * @param mixed $Ferarepasser
     */
    public function setFerarepasser($Ferarepasser)
    {
        $this->Ferarepasser = $Ferarepasser;
    }













}