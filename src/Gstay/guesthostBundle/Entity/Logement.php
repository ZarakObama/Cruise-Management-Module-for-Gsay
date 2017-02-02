<?php

/**
 * Created by PhpStorm.
 * User: USER
 * Date: 02/02/2017
 * Time: 21:48
 */
class Logement
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */

       private $idlogement;

    /**
     * @ORM\Column(type="string",length=255)
     */

     private $nomlogement;

    /**
     *@ORM\Column(type="integer")
     */
    private $capaciteacceuil;


    /**
     *@ORM\Column(type="integer")
     */

    private $nbrchambre;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="string",length=500)
     */
      private $description;

    /**
     * @ORM\Column(type="string",length=255)
     */

    private $disponibilite;

    /**
     * @ORM\Column(type="string",length=255)
     */

     private $adresse;

    /**
     * @ORM\Column(type="string",length=255)
     */

       private $ville;

    /**
     * @ORM\Column(type="string",length=255)
     */

    private $etat;


    /**
     * @ORM\Column(type="integer")
     */

    private $codepostal;

    /**
     * @ORM\Column(type="string",length=255)
     */

    private $image;

    /**
     * @return mixed
     */
    public function getIdLogement()
    {
        return $this->id_logement;
    }

    /**
     * @param mixed $id_logement
     */
    public function setIdLogement($id_logement)
    {
        $this->id_logement = $id_logement;
    }

    /**
     * @return mixed
     */
    public function getNomlogement()
    {
        return $this->nomlogement;
    }

    /**
     * @param mixed $nomlogement
     */
    public function setNomlogement($nomlogement)
    {
        $this->nomlogement = $nomlogement;
    }

    /**
     * @return mixed
     */
    public function getCapaciteacceuil()
    {
        return $this->capaciteacceuil;
    }

    /**
     * @param mixed $capaciteacceuil
     */
    public function setCapaciteacceuil($capaciteacceuil)
    {
        $this->capaciteacceuil = $capaciteacceuil;
    }

    /**
     * @return mixed
     */
    public function getNbrchambre()
    {
        return $this->nbrchambre;
    }

    /**
     * @param mixed $nbrchambre
     */
    public function setNbrchambre($nbrchambre)
    {
        $this->nbrchambre = $nbrchambre;
    }

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
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * @param mixed $disponibilite
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * @param mixed $codepostal
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


}













