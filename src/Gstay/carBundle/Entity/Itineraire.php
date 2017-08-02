<?php
/**
 * Created by PhpStorm.
 * User: Zarkouna
 * Date: 03/02/2017
 * Time: 22:58
 */

namespace Gstay\carBundle\Entity;
use Doctrine\ORM\Mapping as ORM;



use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 */

class Itineraire
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id ;
    /**
     * @ORM\ManyToOne(targetEntity="Croisiere")
     */

    public $id_croisiere;





    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $jour ;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $port_escale ;
    /**
     * @ORM\Column(type="time",nullable=true)
     */
    private $a ;
    public function __toString() {
        return "Jour ".$this->getJour();




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
    public function getIdCroisiere()
    {
        return $this->id_croisiere;
    }

    /**
     * @param mixed $id_croisiere
     */
    public function setIdCroisiere($id_croisiere)
    {
        $this->id_croisiere = $id_croisiere;
    }

    /**
     * @return mixed
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * @param mixed $jour
     */
    public function setJour($jour)
    {
        $this->jour = $jour;
    }

    /**
     * @return mixed
     */
    public function getPortEscale()
    {
        return $this->port_escale;
    }

    /**
     * @param mixed $port_escale
     */
    public function setPortEscale($port_escale)
    {
        $this->port_escale = $port_escale;
    }

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @param mixed $a
     */
    public function setA($a)
    {
        $this->a = $a;
    }

    /**
     * @return mixed
     */
    public function getDe()
    {
        return $this->de;
    }

    /**
     * @param mixed $de
     */
    public function setDe($de)
    {
        $this->de = $de;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param mixed $info
     */
    public function setInfo($info)
    {
        $this->info = $info;
    }
    /**
     * @ORM\Column(type="time",nullable=true)
     */
    private $de ;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $info ;

}