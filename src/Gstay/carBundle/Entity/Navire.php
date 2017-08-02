<?php
namespace Gstay\carBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Created by PhpStorm.
 * User: Zarkouna
 * Date: 02/02/2017
 * Time: 21:57
 */
/**
 * @ORM\Entity
 * @Vich\Uploadable
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
     * @ORM\ManyToOne(targetEntity="ProfileCroisiere", inversedBy="Navire")
     * @ORM\JoinColumn(name="id_userCruiser", referencedColumnName="id")
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
    public function getIdProfile()
    {
        return $this->id_profile;
    }

    /**
     * @param mixed $id_profile
     */
    public function setIdProfile($id_profile)
    {
        $this->id_profile = $id_profile;
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
     * @ORM\Column(type="string",length=255,nullable=true)
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
     * @ORM\Column(type="float",nullable=true)
     */
    private $longueur ;
    /**
     * @ORM\Column(type="float",nullable=true)
     */
    private $tirant ;
    /**
     * @ORM\Column(type="float",nullable=true)
     */
    private $tonnage ;
    /**
     * @ORM\Column(type="float",nullable=true)
     */
    private $vitesse ;
    /**
     * @ORM\Column(type="float",nullable=true)
     */
    private $nbr_pont ;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $capacite ;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $equipage ;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $langue ;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $monnaies ;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $internet ;
    /**
 * @ORM\Column(type="text",length=65000,nullable=true)
 */
    private $cabines ;
    /**
     * @ORM\Column(type="text",length=65000,nullable=true)
     */
    private $service ;
    /**
     * @ORM\Column(type="text",length=65000,nullable=true)
     */
    private $divertis;
    /**
     * @ORM\Column(type="text",length=65000,nullable=true)
     */
    private $fitness ;
    /**
     * @ORM\Column(type="text",length=65000,nullable=true)
     */
    private $shopping ;
    /**
     * @ORM\Column(type="text",length=65000,nullable=true)
     */
    private $famille ;
    /**
     * @ORM\Column(type="text",length=65000,nullable=true)
     */
    private $tenue ;
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName")
     *
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     *
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Navire
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     *
     * @return Navire
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;


        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageName()
    {
        return $this->imageName;
    }




}