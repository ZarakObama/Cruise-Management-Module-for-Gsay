<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 03/02/2017
 * Time: 22:21
 */

namespace Gstay\guesthostBundle\Entity;
use Doctrine\ORM\Mapping as ORM ;


/**
 * @ORM\Entity
 */

class User
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")

     */
   private $cin;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $FirstName;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $LastName;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="integer")
     */
    private $numTel;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $rue;

    /**
     * @ORM\Column(type="integer")
     */
    private $codePostale;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $Emploi;

    /**
     * @ORM\Column(type="string",length=255)
     */

    private $Country;

    /**
     * @ORM\Column(type="string",length=255)
     */

    private $Etat;

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param mixed $FirstName
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param mixed $LastName
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * @param mixed $numTel
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    }

    /**
     * @return mixed
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * @param mixed $rue
     */
    public function setRue($rue)
    {
        $this->rue = $rue;
    }

    /**
     * @return mixed
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * @param mixed $codePostale
     */
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;
    }

    /**
     * @return mixed
     */
    public function getEmploi()
    {
        return $this->Emploi;
    }

    /**
     * @param mixed $Emploi
     */
    public function setEmploi($Emploi)
    {
        $this->Emploi = $Emploi;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param mixed $Country
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->Etat;
    }

    /**
     * @param mixed $Etat
     */
    public function setEtat($Etat)
    {
        $this->Etat = $Etat;
    }














}