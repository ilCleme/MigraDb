<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblPratiche
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="cognome", type="string", length=100, nullable=true)
     */
    private $cognome;

    /**
     * @var integer
     *
     * @ORM\Column(name="pratica", type="integer", nullable=true)
     */
    private $pratica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datains", type="date", nullable=true)
     */
    private $datains;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_img_stato_pratiche", type="integer", nullable=false)
     */
    private $idTblImgStatoPratiche = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_tipo_mutuo", type="integer", nullable=false)
     */
    private $idTblTipoMutuo = '0';



    /**
     * Get id
     *
     * @return boolean
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return BaseTblPratiche
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     *
     * @return BaseTblPratiche
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set pratica
     *
     * @param integer $pratica
     *
     * @return BaseTblPratiche
     */
    public function setPratica($pratica)
    {
        $this->pratica = $pratica;

        return $this;
    }

    /**
     * Get pratica
     *
     * @return integer
     */
    public function getPratica()
    {
        return $this->pratica;
    }

    /**
     * Set datains
     *
     * @param \DateTime $datains
     *
     * @return BaseTblPratiche
     */
    public function setDatains($datains)
    {
        $this->datains = $datains;

        return $this;
    }

    /**
     * Get datains
     *
     * @return \DateTime
     */
    public function getDatains()
    {
        return $this->datains;
    }

    /**
     * Set idTblImgStatoPratiche
     *
     * @param integer $idTblImgStatoPratiche
     *
     * @return BaseTblPratiche
     */
    public function setIdTblImgStatoPratiche($idTblImgStatoPratiche)
    {
        $this->idTblImgStatoPratiche = $idTblImgStatoPratiche;

        return $this;
    }

    /**
     * Get idTblImgStatoPratiche
     *
     * @return integer
     */
    public function getIdTblImgStatoPratiche()
    {
        return $this->idTblImgStatoPratiche;
    }

    /**
     * Set idTblTipoMutuo
     *
     * @param integer $idTblTipoMutuo
     *
     * @return BaseTblPratiche
     */
    public function setIdTblTipoMutuo($idTblTipoMutuo)
    {
        $this->idTblTipoMutuo = $idTblTipoMutuo;

        return $this;
    }

    /**
     * Get idTblTipoMutuo
     *
     * @return integer
     */
    public function getIdTblTipoMutuo()
    {
        return $this->idTblTipoMutuo;
    }
}
