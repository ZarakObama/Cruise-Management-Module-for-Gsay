<?php
/**
 * Created by PhpStorm.
 * User: Zarkouna
 * Date: 03/02/2017
 * Time: 22:38
 */

namespace Gstay\carBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;


use Vich\UploaderBundle\Mapping\Annotation as Vich;
/**
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Croisiere
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id ;
    /**
 * @ORM\ManyToOne(targetEntity="Navire",inversedBy="Croisiere")
 * @ORM\JoinColumn(name="id_navire", referencedColumnName="id")
 */
    public $id_navire;
    /**
     * @ORM\ManyToOne(targetEntity="ProfileCroisiere", inversedBy="Croisiere")
     * @ORM\JoinColumn(name="id_userCruiser", referencedColumnName="id")
     */
    private $id_profile ;
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Itineraire", mappedBy="Croisiere" , cascade={"persist"})
     * @ORM\OrderBy({"id"="ASC"})
     */
    public $days ;



    public function __construct()
    {
        $this->days = new ArrayCollection();
    }
    /**
     * @return mixed
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * @param mixed $days
     */
    public function setDays(ArrayCollection $days)
    {
        $this->days = $days;
    }
    public function addDay(Itineraire $day)
    {
        $day->setIdCroisiere($this);
        $this->days->add($day);
    }

    /**
     * @return mixed
     */
    public function getDateArr()
    {
        return $this->date_arr;
    }

    /**
     * @param mixed $date_arr
     */
    public function setDateArr($date_arr)
    {
        $this->date_arr = $date_arr;
    }

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $num_croissiere ;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $nb_cabine ;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $nom ;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $destination ;

    /**
     * @ORM\Column(type="date",nullable=true)
     */
    private $date_dep ;
    /**
     * @ORM\Column(type="date",nullable=true)
     */
    private $date_arr ;
    /**
     * @ORM\Column(type="text",length=65000,nullable=true)
     */
    private $service_inclu ;
    /**
     * @ORM\Column(type="text",length=65000,nullable=true)
     */
    private $service_plus ;
    /**
     * @ORM\Column(type="text",length=65000,nullable=true)
     */
    private $offre_special ;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName")
     *
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     *
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="datetime",nullable=true)
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
     * @return Croisiere
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
     * @return Croisiere
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

    /**
     * @return mixed
     */
    public function getNumCroissiere()
    {
        return $this->num_croissiere;
    }

    /**
     * @param mixed $num_croissiere
     */
    public function setNumCroissiere($num_croissiere)
    {
        $this->num_croissiere = $num_croissiere;
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return mixed
     */
    public function getPortDep()
    {
        return $this->port_dep;
    }

    /**
     * @param mixed $port_dep
     */
    public function setPortDep($port_dep)
    {
        $this->port_dep = $port_dep;
    }

    /**
     * @return mixed
     */
    public function getPortArr()
    {
        return $this->port_arr;
    }

    /**
     * @param mixed $port_arr
     */
    public function setPortArr($port_arr)
    {
        $this->port_arr = $port_arr;
    }



    /**
     * @return mixed
     */
    public function getDateDep()
    {
        return $this->date_dep;
    }

    /**
     * @param mixed $date_dep
     */
    public function setDateDep($date_dep)
    {
        $this->date_dep = $date_dep;
    }

    /**
     * @return mixed
     */
    public function getNbCabine()
    {
        return $this->nb_cabine;
    }

    /**
     * @param mixed $nb_cabine
     */
    public function setNbCabine($nb_cabine)
    {
        $this->nb_cabine = $nb_cabine;
    }

    /**
     * @return mixed
     */
    public function getServiceInclu()
    {
        return $this->service_inclu;
    }

    /**
     * @param mixed $service_inclu
     */
    public function setServiceInclu($service_inclu)
    {
        $this->service_inclu = $service_inclu;
    }

    /**
     * @return mixed
     */
    public function getServicePlus()
    {
        return $this->service_plus;
    }

    /**
     * @param mixed $service_plus
     */
    public function setServicePlus($service_plus)
    {
        $this->service_plus = $service_plus;
    }

    /**
     * @return mixed
     */
    public function getOffreSpecial()
    {
        return $this->offre_special;
    }

    /**
     * @param mixed $offre_special
     */
    public function setOffreSpecial($offre_special)
    {
        $this->offre_special = $offre_special;
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




}