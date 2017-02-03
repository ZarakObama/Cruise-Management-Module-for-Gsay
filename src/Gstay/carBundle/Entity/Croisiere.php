<?php
/**
 * Created by PhpStorm.
 * User: Zarkouna
 * Date: 03/02/2017
 * Time: 22:38
 */

namespace Gstay\carBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
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
 * @ORM\OneToOne(targetEntity="navire", inversedBy="Croisiere")
 * @ORM\JoinColumn(name="id_navire", referencedColumnName="id")
 */
    public $id_navire;
    /**
     * @ORM\ManyToOne(targetEntity="cabine", inversedBy="Croisiere")
     * @ORM\JoinColumn(name="id_cabine", referencedColumnName="id")
     */
    public $id_cabine;
    /**
     * @ORM\Column(type="integer")
     */
    private $num_croissiere ;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $destination ;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $port_dep ;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $port_arr ;
    /**
     * @ORM\Column(type="integer")
     */
    private $duree ;
    /**
     * @ORM\Column(type="date")
     */
    private $date_dep ;
    /**
     * @ORM\Column(type="text",length=65000)
     */
    private $service_inclu ;
    /**
     * @ORM\Column(type="text",length=65000)
     */
    private $service_plus ;
    /**
     * @ORM\Column(type="text",length=65000)
     */
    private $offre_special ;
    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
    private $brochure;
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
    public function getIdCabine()
    {
        return $this->id_cabine;
    }

    /**
     * @param mixed $id_cabine
     */
    public function setIdCabine($id_cabine)
    {
        $this->id_cabine = $id_cabine;
    }

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
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param mixed $duree
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
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
    public function getBrochure()
    {
        return $this->brochure;
    }

    /**
     * @param mixed $brochure
     */
    public function setBrochure($brochure)
    {
        $this->brochure = $brochure;
    }

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

    private $photo3;



}