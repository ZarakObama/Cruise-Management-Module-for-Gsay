<?php
/**
 * Created by PhpStorm.
 * User: Zarkouna
 * Date: 04/02/2017
 * Time: 21:20
 */

namespace Gstay\carBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Created by PhpStorm.
 * User: Zarkouna
 * Date: 02/02/2017
 * Time: 21:57
 */
/**
 * @ORM\Entity
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
     * @ORM\Column(type="string",length=255)
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
    public function getActivité()
    {
        return $this->activité;
    }

    /**
     * @param mixed $activité
     */
    public function setActivité($activité)
    {
        $this->activité = $activité;
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
     * @ORM\Column(type="date",nullable=true)
     */
    private $dateInscrit;

}