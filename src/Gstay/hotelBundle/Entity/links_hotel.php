<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02/02/2017
 * Time: 22:27
 */

namespace Gstay\hotelBundle\entity;

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class links_hotel
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\OneToOne(targetEntity="Hotel", inversedBy="links_hotel")
     * @ORM\JoinColumn(name="id_hotel", referencedColumnName="id")
     */
    private $id_hotel ;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $link_fb;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $link_twitter;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $link_instagram;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $link_web;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $link_google;

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
    public function getLinkFb()
    {
        return $this->link_fb;
    }

    /**
     * @param mixed $link_fb
     */
    public function setLinkFb($link_fb)
    {
        $this->link_fb = $link_fb;
    }

    /**
     * @return mixed
     */
    public function getLinkTwitter()
    {
        return $this->link_twitter;
    }

    /**
     * @param mixed $link_twitter
     */
    public function setLinkTwitter($link_twitter)
    {
        $this->link_twitter = $link_twitter;
    }

    /**
     * @return mixed
     */
    public function getLinkInstagram()
    {
        return $this->link_instagram;
    }

    /**
     * @param mixed $link_instagram
     */
    public function setLinkInstagram($link_instagram)
    {
        $this->link_instagram = $link_instagram;
    }

    /**
     * @return mixed
     */
    public function getLinkWeb()
    {
        return $this->link_web;
    }

    /**
     * @param mixed $link_web
     */
    public function setLinkWeb($link_web)
    {
        $this->link_web = $link_web;
    }

    /**
     * @return mixed
     */
    public function getLinkGoogle()
    {
        return $this->link_google;
    }

    /**
     * @param mixed $link_google
     */
    public function setLinkGoogle($link_google)
    {
        $this->link_google = $link_google;
    }


}