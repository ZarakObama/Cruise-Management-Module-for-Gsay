<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02/02/2017
 * Time: 21:55
 */

namespace Gstay\hotelBundle\Entity;

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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="$id_hotel", referencedColumnName="id")
     */
    private $id_hotel ;
    /**
     * @ORM\Column(type="string", unique=true )
     */
    private $name;

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

}