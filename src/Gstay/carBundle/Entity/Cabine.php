<?php
/**
 * Created by PhpStorm.
 * User: Zarkouna
 * Date: 03/02/2017
 * Time: 22:10
 */

namespace Gstay\carBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Cabine
{
    /**
 * @ORM\GeneratedValue
 * @ORM\Id
 * @ORM\Column(type="integer")
 */
    private $id ;
    /**
     * @ORM\ManyToOne(targetEntity="croisiere",inversedBy="Cabine")
     * @ORM\JoinColumn(name="id_croisiere", referencedColumnName="id")
     */
    public $id_croisiere;

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
     * @ORM\Column(type="string",length=255)
     */
    private $nom ;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $type ;
    /**
     * @ORM\Column(type="integer")
     */
    private $superficie ;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $maxper ;
    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_lit ;
    /**
     * @ORM\Column(type="boolean")
     */
    private $salle_bain ;
    /**
     * @ORM\Column(type="boolean")
     */
    private $tele;
    /**
     * @ORM\Column(type="boolean")
     */
    private $mini_bar ;
    /**
     * @ORM\Column(type="boolean")
     */
    private $coffre_fort ;
    /**
     * @ORM\Column(type="boolean")
     */
    private $clim ;
    /**
     * @ORM\Column(type="boolean")
     */
    private $dressing ;

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
     * @ORM\Column(type="float")
     */
    private $prix;

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
    public function getIdNavire()
    {
        return $this->id_navire;
    }

    /**
     * @param mixed $id_navire
     */
    public function setIdNavire($id_navire)
    {
        $this->id_navire = $id_navire;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * @param mixed $superficie
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;
    }

    /**
     * @return mixed
     */
    public function getMaxper()
    {
        return $this->maxper;
    }

    /**
     * @param mixed $maxper
     */
    public function setMaxper($maxper)
    {
        $this->maxper = $maxper;
    }

    /**
     * @return mixed
     */
    public function getNbrLit()
    {
        return $this->nbr_lit;
    }

    /**
     * @param mixed $nbr_lit
     */
    public function setNbrLit($nbr_lit)
    {
        $this->nbr_lit = $nbr_lit;
    }

    /**
     * @return mixed
     */
    public function getSalleBain()
    {
        return $this->salle_bain;
    }

    /**
     * @param mixed $salle_bain
     */
    public function setSalleBain($salle_bain)
    {
        $this->salle_bain = $salle_bain;
    }

    /**
     * @return mixed
     */
    public function getTele()
    {
        return $this->tele;
    }

    /**
     * @param mixed $tele
     */
    public function setTele($tele)
    {
        $this->tele = $tele;
    }

    /**
     * @return mixed
     */
    public function getMiniBar()
    {
        return $this->mini_bar;
    }

    /**
     * @param mixed $mini_bar
     */
    public function setMiniBar($mini_bar)
    {
        $this->mini_bar = $mini_bar;
    }

    /**
     * @return mixed
     */
    public function getCoffreFort()
    {
        return $this->coffre_fort;
    }

    /**
     * @param mixed $coffre_fort
     */
    public function setCoffreFort($coffre_fort)
    {
        $this->coffre_fort = $coffre_fort;
    }

    /**
     * @return mixed
     */
    public function getClim()
    {
        return $this->clim;
    }

    /**
     * @param mixed $clim
     */
    public function setClim($clim)
    {
        $this->clim = $clim;
    }

    /**
     * @return mixed
     */
    public function getDressing()
    {
        return $this->dressing;
    }

    /**
     * @param mixed $dressing
     */
    public function setDressing($dressing)
    {
        $this->dressing = $dressing;
    }

    /**
     * @return mixed
     */
    public function getAvantage()
    {
        return $this->avantage;
    }

    /**
     * @param mixed $avantage
     */
    public function setAvantage($avantage)
    {
        $this->avantage = $avantage;
    }

    /**
     * @return mixed
     */

}