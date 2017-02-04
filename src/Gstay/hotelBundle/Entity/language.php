<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02/02/2017
 * Time: 22:05
 */

namespace Gstay\hotelBundle\entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class language
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\OneToOne(targetEntity="Hotel")
     * @ORM\JoinColumn(name="id_hotel", referencedColumnName="id")
     */
    private $id_hotel ;
    /**
     * @ORM\Column(type="integer")
     */
    private $arabic;
    /**
     * @ORM\Column(type="integer")
     */
    private $italian;
    /**
     * @ORM\Column(type="integer")
     */
    private $french;
    /**
     * @ORM\Column(type="integer")
     */
    private $english;
    /**
     * @ORM\Column(type="integer")
     */
    private $german;
    /**
     * @ORM\Column(type="integer")
     */
    private $russian;
    /**
     * @ORM\Column(type="integer")
     */
    private $spanish;

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
    public function getArabic()
    {
        return $this->arabic;
    }

    /**
     * @param mixed $arabic
     */
    public function setArabic($arabic)
    {
        $this->arabic = $arabic;
    }

    /**
     * @return mixed
     */
    public function getItalian()
    {
        return $this->italian;
    }

    /**
     * @param mixed $italian
     */
    public function setItalian($italian)
    {
        $this->italian = $italian;
    }

    /**
     * @return mixed
     */
    public function getFrench()
    {
        return $this->french;
    }

    /**
     * @param mixed $french
     */
    public function setFrench($french)
    {
        $this->french = $french;
    }

    /**
     * @return mixed
     */
    public function getEnglish()
    {
        return $this->english;
    }

    /**
     * @param mixed $english
     */
    public function setEnglish($english)
    {
        $this->english = $english;
    }

    /**
     * @return mixed
     */
    public function getGerman()
    {
        return $this->german;
    }

    /**
     * @param mixed $german
     */
    public function setGerman($german)
    {
        $this->german = $german;
    }

    /**
     * @return mixed
     */
    public function getRussian()
    {
        return $this->russian;
    }

    /**
     * @param mixed $russian
     */
    public function setRussian($russian)
    {
        $this->russian = $russian;
    }

    /**
     * @return mixed
     */
    public function getSpanish()
    {
        return $this->spanish;
    }

    /**
     * @param mixed $spanish
     */
    public function setSpanish($spanish)
    {
        $this->spanish = $spanish;
    }

}