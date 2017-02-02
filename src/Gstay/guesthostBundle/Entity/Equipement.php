<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 02/02/2017
 * Time: 22:03
 */

namespace Gstay\eventBundle\Entity;


class Equipement
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */

    private $idequipement;

    /**
     * @ORM\ManyToOne(targetEntity="Logement", inversedBy="Equipement")
     * @ORM\JoinColumn(name="id_logement", referencedColumnName="idlogement")
     */

    private $id_logement;



}