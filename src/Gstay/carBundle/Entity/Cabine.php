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




use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity
 * @Vich\Uploadable
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
     * @ORM\ManyToOne(targetEntity="Croisiere",inversedBy="Cabine")
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
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $nom ;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $type ;

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $quantite ;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $superficie ;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $maxper ;
    /**
     * @ORM\Column(type="integer",nullable=true)
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
     * @ORM\Column(type="integer")
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

    /**
     * @return mixed
     */
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
     * @return Cabine
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
     * @return Cabine
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