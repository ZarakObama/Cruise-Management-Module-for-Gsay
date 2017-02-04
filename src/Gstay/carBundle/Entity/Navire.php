<?php
namespace Gstay\carBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Created by PhpStorm.
 * User: Zarkouna
 * Date: 02/02/2017
 * Time: 21:57
 */
/**
 * @ORM\Entity
 */
class Navire
{
/**
* @ORM\GeneratedValue
* @ORM\Id
* @ORM\Column(type="integer")
*/
private $id ;

    /**
     * @ORM\OneToOne(targetEntity="ProfileCroisiere",)
     * @ORM\JoinColumn(name="id_navire", referencedColumnName="id")
     */
    private $id_profile ;



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
    public function getMiseService()
    {
        return $this->mise_service;
    }

    /**
     * @param mixed $mise_service
     */
    public function setMiseService($mise_service)
    {
        $this->mise_service = $mise_service;
    }

    /**
     * @return mixed
     */
    public function getRenove()
    {
        return $this->renove;
    }

    /**
     * @param mixed $renove
     */
    public function setRenove($renove)
    {
        $this->renove = $renove;
    }

    /**
     * @return mixed
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * @param mixed $longueur
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    }

    /**
     * @return mixed
     */
    public function getTirant()
    {
        return $this->tirant;
    }

    /**
     * @param mixed $tirant
     */
    public function setTirant($tirant)
    {
        $this->tirant = $tirant;
    }

    /**
     * @return mixed
     */
    public function getTonnage()
    {
        return $this->tonnage;
    }

    /**
     * @param mixed $tonnage
     */
    public function setTonnage($tonnage)
    {
        $this->tonnage = $tonnage;
    }

    /**
     * @return mixed
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * @param mixed $vitesse
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }

    /**
     * @return mixed
     */
    public function getNbrPont()
    {
        return $this->nbr_pont;
    }

    /**
     * @param mixed $nbr_pont
     */
    public function setNbrPont($nbr_pont)
    {
        $this->nbr_pont = $nbr_pont;
    }

    /**
     * @return mixed
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * @param mixed $capacite
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;
    }

    /**
     * @return mixed
     */
    public function getEquipage()
    {
        return $this->equipage;
    }

    /**
     * @param mixed $equipage
     */
    public function setEquipage($equipage)
    {
        $this->equipage = $equipage;
    }

    /**
     * @return mixed
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * @param mixed $langue
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;
    }

    /**
     * @return mixed
     */
    public function getMonnaies()
    {
        return $this->monnaies;
    }

    /**
     * @param mixed $monnaies
     */
    public function setMonnaies($monnaies)
    {
        $this->monnaies = $monnaies;
    }

    /**
     * @return mixed
     */
    public function getInternet()
    {
        return $this->internet;
    }

    /**
     * @param mixed $internet
     */
    public function setInternet($internet)
    {
        $this->internet = $internet;
    }

    /**
     * @return mixed
     */
    public function getCabines()
    {
        return $this->cabines;
    }

    /**
     * @param mixed $cabines
     */
    public function setCabines($cabines)
    {
        $this->cabines = $cabines;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * @return mixed
     */
    public function getDivertis()
    {
        return $this->divertis;
    }

    /**
     * @param mixed $divertis
     */
    public function setDivertis($divertis)
    {
        $this->divertis = $divertis;
    }

    /**
     * @return mixed
     */
    public function getFitness()
    {
        return $this->fitness;
    }

    /**
     * @param mixed $fitness
     */
    public function setFitness($fitness)
    {
        $this->fitness = $fitness;
    }

    /**
     * @return mixed
     */
    public function getShopping()
    {
        return $this->shopping;
    }

    /**
     * @param mixed $shopping
     */
    public function setShopping($shopping)
    {
        $this->shopping = $shopping;
    }

    /**
     * @return mixed
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * @param mixed $famille
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;
    }

    /**
     * @return mixed
     */
    public function getTenue()
    {
        return $this->tenue;
    }

    /**
     * @param mixed $tenue
     */
    public function setTenue($tenue)
    {
        $this->tenue = $tenue;
    }

    /**
     * @return string
     */

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $nom ;
    /**
     * @ORM\Column(type="date")
     */
    private $mise_service ;
    /**
     * @ORM\Column(type="date")
     */
    private $renove ;
    /**
     * @ORM\Column(type="float")
     */
    private $longueur ;
    /**
     * @ORM\Column(type="float")
     */
    private $tirant ;
    /**
     * @ORM\Column(type="float")
     */
    private $tonnage ;
    /**
     * @ORM\Column(type="float")
     */
    private $vitesse ;
    /**
     * @ORM\Column(type="float")
     */
    private $nbr_pont ;
    /**
     * @ORM\Column(type="integer")
     */
    private $capacite ;
    /**
     * @ORM\Column(type="integer")
     */
    private $equipage ;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $langue ;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $monnaies ;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $internet ;
    /**
 * @ORM\Column(type="text",length=65000)
 */
    private $cabines ;
    /**
     * @ORM\Column(type="text",length=65000)
     */
    private $service ;
    /**
     * @ORM\Column(type="text",length=65000)
     */
    private $divertis;
    /**
     * @ORM\Column(type="text",length=65000)
     */
    private $fitness ;
    /**
     * @ORM\Column(type="text",length=65000)
     */
    private $shopping ;
    /**
     * @ORM\Column(type="text",length=65000)
     */
    private $famille ;
    /**
     * @ORM\Column(type="text",length=65000)
     */
    private $tenue ;

    /**
     *@ORM\Column(type="string", length=1000)
     * @Assert\Image(
     *     allowLandscape = false,
     *     allowPortrait = false,
     *     minWidth = 200,
     *     maxWidth = 400,
     *     minHeight = 200,
     *     maxHeight = 400
     * )
     */

    private $photo1;

    /**
     * @return mixed
     */
    public function getPhoto1()
    {
        return $this->photo1;
    }

    /**
     * @param mixed $photo1
     */

    public function setPhoto1(File $file =null)
    {
        $this->photo1 = $file;
    }

    /**
     * @return mixed
     */
    public function getPhoto2()
    {
        return $this->photo2;
    }

    /**
     * @param mixed $photo2
     */
    public function setPhoto2(File $file =null)
    {
        $this->photo2 = $file;
    }

    /**
     * @return mixed
     */
    public function getPhoto3()
    {
        return $this->photo3;
    }

    /**
     * @param mixed $photo3
     */
    public function setPhoto3(File $file =null)
    {
        $this->photo3 = $file;
    }

    /**
     * @return mixed
     */

    /**
     *@ORM\Column(type="string", length=1000)
     * @Assert\Image(
     *     allowLandscape = false,
     *     allowPortrait = false,
     *     minWidth = 200,
     *     maxWidth = 400,
     *     minHeight = 200,
     *     maxHeight = 400
     * )
     */
    private $photo2;
    /**
     *@ORM\Column(type="string", length=1000)
     * @Assert\Image(
     *     allowLandscape = false,
     *     allowPortrait = false,
     *     minWidth = 201,
     *     maxWidth = 400,
     *     minHeight = 200,
     *     maxHeight = 400
     * )
     */
    private $photo3;





}