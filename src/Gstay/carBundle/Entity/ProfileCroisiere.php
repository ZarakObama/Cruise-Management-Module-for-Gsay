<?php
/**
 * Created by PhpStorm.
 * User: Zarkouna
 * Date: 04/02/2017
 * Time: 21:20
 */

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
class ProfileCroisiere
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id ;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     */
    private $id_user ;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $nom_compa;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $mat_fisc;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $activite;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $post_comp;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $first_name;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $last_name;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
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
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getStreetAdresse()
    {
        return $this->street_adresse;
    }

    /**
     * @param mixed $street_adresse
     */
    public function setStreetAdresse($street_adresse)
    {
        $this->street_adresse = $street_adresse;
    }

    /**
     * @return mixed
     */
    public function getPhoneNum()
    {
        return $this->phone_num;
    }

    /**
     * @param mixed $phone_num
     */
    public function setPhoneNum($phone_num)
    {
        $this->phone_num = $phone_num;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */

    private $country;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $state;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $city;


    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $street_adresse;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $phone_num;
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $fax;
    /**
     * @ORM\Column(type="float",nullable=true)
     */
    private $stars;


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
     * @ORM\Column(type="date",nullable=true)
     */
    private $dateInscrit;

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
    public function getNomCompa()
    {
        return $this->nom_compa;
    }

    /**
     * @param mixed $nom_compa
     */
    public function setNomCompa($nom_compa)
    {
        $this->nom_compa = $nom_compa;
    }

    /**
     * @return mixed
     */
    public function getMatFisc()
    {
        return $this->mat_fisc;
    }

    /**
     * @param mixed $mat_fisc
     */
    public function setMatFisc($mat_fisc)
    {
        $this->mat_fisc = $mat_fisc;
    }

    /**
     * @return mixed
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * @param mixed $activite
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;
    }

    /**
     * @return mixed
     */
    public function getPostComp()
    {
        return $this->post_comp;
    }

    /**
     * @param mixed $post_comp
     */
    public function setPostComp($post_comp)
    {
        $this->post_comp = $post_comp;
    }

    /**
     * @return mixed
     */
    public function getDateInscrit()
    {
        return $this->dateInscrit;
    }

    /**
     * @param mixed $dateInscrit
     */
    public function setDateInscrit($dateInscrit)
    {
        $this->dateInscrit = $dateInscrit;
    }
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
     * @return ProfileCroisiere
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
     * @return ProfileCroisiere
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