<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02/02/2017
 * Time: 23:18
 */

namespace Gstay\hotelBundle\entity;
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class promoHotel
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="Hotel", inversedBy="promoHotel")
     * @ORM\JoinColumn(name="$id_hotel", referencedColumnName="id")
     */
    private $id_hotel ;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $name;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $photo;
    /**
     * @ORM\Column(type="integer")
     */
    private $pourcentage;
    /**
     * @ORM\Column(type="date")
     */
    private $date_begin;
    /**
     * @ORM\Column(type="date")
     */
    private $date_end;
    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_chambres;
    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_bangalows;
    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_suites;

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
    public function getIdHotel()
    {
        return $this->id_hotel;
    }

    /**
     * @param mixed $id_hotel
     */
    public function setIdHotel($id_hotel)
    {
        $this->id_hotel = $id_hotel;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * @param mixed $pourcentage
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;
    }

    /**
     * @return mixed
     */
    public function getDateBegin()
    {
        return $this->date_begin;
    }

    /**
     * @param mixed $date_begin
     */
    public function setDateBegin($date_begin)
    {
        $this->date_begin = $date_begin;
    }

    /**
     * @return mixed
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

    /**
     * @param mixed $date_end
     */
    public function setDateEnd($date_end)
    {
        $this->date_end = $date_end;
    }

    /**
     * @return mixed
     */
    public function getNbrChambres()
    {
        return $this->nbr_chambres;
    }

    /**
     * @param mixed $nbr_chambres
     */
    public function setNbrChambres($nbr_chambres)
    {
        $this->nbr_chambres = $nbr_chambres;
    }

    /**
     * @return mixed
     */
    public function getNbrBangalows()
    {
        return $this->nbr_bangalows;
    }

    /**
     * @param mixed $nbr_bangalows
     */
    public function setNbrBangalows($nbr_bangalows)
    {
        $this->nbr_bangalows = $nbr_bangalows;
    }

    /**
     * @return mixed
     */
    public function getNbrSuites()
    {
        return $this->nbr_suites;
    }

    /**
     * @param mixed $nbr_suites
     */
    public function setNbrSuites($nbr_suites)
    {
        $this->nbr_suites = $nbr_suites;
    }

}