<?php

namespace UCBL\PidjiBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="UCBL\PidjiBundle\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="UCBL\PidjiBundle\Entity\Annonce", mappedBy="categories")
     */
    private $listeAnnonces;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Categorie
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listeAnnonces = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listeAnnonce
     *
     * @param \UCBL\PidjiBundle\Entity\Annonce $listeAnnonce
     *
     * @return Categorie
     */
    public function addListeAnnonce(\UCBL\PidjiBundle\Entity\Annonce $listeAnnonce)
    {
        $this->listeAnnonces[] = $listeAnnonce;

        return $this;
    }

    /**
     * Remove listeAnnonce
     *
     * @param \UCBL\PidjiBundle\Entity\Annonce $listeAnnonce
     */
    public function removeListeAnnonce(\UCBL\PidjiBundle\Entity\Annonce $listeAnnonce)
    {
        $this->listeAnnonces->removeElement($listeAnnonce);
    }

    /**
     * Get listeAnnonces
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListeAnnonces()
    {
        return $this->listeAnnonces;
    }
}
