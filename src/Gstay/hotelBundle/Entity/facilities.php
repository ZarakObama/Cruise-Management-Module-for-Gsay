<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02/02/2017
 * Time: 21:55
 */

namespace Gstay\hotelBundle\entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class facilities
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
    private $free_breakfast;
    /**
     * @ORM\Column(type="integer")
     */
    private $sauna;
    /**
     * @ORM\Column(type="integer")
     */
    private $pool;
    /**
     * @ORM\Column(type="integer")
     */
    private $smoking_area;
    /**
     * @ORM\Column(type="integer")
     */
    private $hair_dryer;
    /**
     * @ORM\Column(type="integer")
     */
    private $spa;
    /**
     * @ORM\Column(type="integer")
     */
    private $restaurant;
    /**
     * @ORM\Column(type="integer")
     */
    private $airport_transport;
    /**
     * @ORM\Column(type="integer")
     */
    private $laundry;
    /**
     * @ORM\Column(type="integer")
     */
    private $front_desk;
    /**
     * @ORM\Column(type="integer")
     */
    private $parking;
    /**
     * @ORM\Column(type="integer")
     */
    private $casino;
    /**
     * @ORM\Column(type="integer")
     */
    private $wifi;
    /**
     * @ORM\Column(type="integer")
     */
    private $buisness_center;
    /**
     * @ORM\Column(type="integer")
     */
    private $salle_fete;

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
    public function getFreeBreakfast()
    {
        return $this->free_breakfast;
    }

    /**
     * @param mixed $free_breakfast
     */
    public function setFreeBreakfast($free_breakfast)
    {
        $this->free_breakfast = $free_breakfast;
    }

    /**
     * @return mixed
     */
    public function getSauna()
    {
        return $this->sauna;
    }

    /**
     * @param mixed $sauna
     */
    public function setSauna($sauna)
    {
        $this->sauna = $sauna;
    }

    /**
     * @return mixed
     */
    public function getPool()
    {
        return $this->pool;
    }

    /**
     * @param mixed $pool
     */
    public function setPool($pool)
    {
        $this->pool = $pool;
    }

    /**
     * @return mixed
     */
    public function getSmokingArea()
    {
        return $this->smoking_area;
    }

    /**
     * @param mixed $smoking_area
     */
    public function setSmokingArea($smoking_area)
    {
        $this->smoking_area = $smoking_area;
    }

    /**
     * @return mixed
     */
    public function getHairDryer()
    {
        return $this->hair_dryer;
    }

    /**
     * @param mixed $hair_dryer
     */
    public function setHairDryer($hair_dryer)
    {
        $this->hair_dryer = $hair_dryer;
    }

    /**
     * @return mixed
     */
    public function getSpa()
    {
        return $this->spa;
    }

    /**
     * @param mixed $spa
     */
    public function setSpa($spa)
    {
        $this->spa = $spa;
    }

    /**
     * @return mixed
     */
    public function getRestaurant()
    {
        return $this->restaurant;
    }

    /**
     * @param mixed $restaurant
     */
    public function setRestaurant($restaurant)
    {
        $this->restaurant = $restaurant;
    }

    /**
     * @return mixed
     */
    public function getAirportTransport()
    {
        return $this->airport_transport;
    }

    /**
     * @param mixed $airport_transport
     */
    public function setAirportTransport($airport_transport)
    {
        $this->airport_transport = $airport_transport;
    }

    /**
     * @return mixed
     */
    public function getLaundry()
    {
        return $this->laundry;
    }

    /**
     * @param mixed $laundry
     */
    public function setLaundry($laundry)
    {
        $this->laundry = $laundry;
    }

    /**
     * @return mixed
     */
    public function getFrontDesk()
    {
        return $this->front_desk;
    }

    /**
     * @param mixed $front_desk
     */
    public function setFrontDesk($front_desk)
    {
        $this->front_desk = $front_desk;
    }

    /**
     * @return mixed
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * @param mixed $parking
     */
    public function setParking($parking)
    {
        $this->parking = $parking;
    }

    /**
     * @return mixed
     */
    public function getCasino()
    {
        return $this->casino;
    }

    /**
     * @param mixed $casino
     */
    public function setCasino($casino)
    {
        $this->casino = $casino;
    }

    /**
     * @return mixed
     */
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * @param mixed $wifi
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
    }

    /**
     * @return mixed
     */
    public function getBuisnessCenter()
    {
        return $this->buisness_center;
    }

    /**
     * @param mixed $buisness_center
     */
    public function setBuisnessCenter($buisness_center)
    {
        $this->buisness_center = $buisness_center;
    }

    /**
     * @return mixed
     */
    public function getSalleFete()
    {
        return $this->salle_fete;
    }

    /**
     * @param mixed $salle_fete
     */
    public function setSalleFete($salle_fete)
    {
        $this->salle_fete = $salle_fete;
    }

}