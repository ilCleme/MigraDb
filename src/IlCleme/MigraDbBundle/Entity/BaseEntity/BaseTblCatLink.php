<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblCatLink
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_cat_link", type="integer", nullable=false)
     */
    private $idTblCatLink;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_padre", type="integer", nullable=false)
     */
    private $idPadre = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=false)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome = 'nome categoria';

    /**
     * @var string
     *
     * @ORM\Column(name="smarty_template", type="string", length=200, nullable=false)
     */
    private $smartyTemplate = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=true)
     */
    private $img;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTblCatLink
     *
     * @param integer $idTblCatLink
     *
     * @return BaseTblCatLink
     */
    public function setIdTblCatLink($idTblCatLink)
    {
        $this->idTblCatLink = $idTblCatLink;

        return $this;
    }

    /**
     * Get idTblCatLink
     *
     * @return integer
     */
    public function getIdTblCatLink()
    {
        return $this->idTblCatLink;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblCatLink
     */
    public function setIdTblLingua($idTblLingua)
    {
        $this->idTblLingua = $idTblLingua;

        return $this;
    }

    /**
     * Get idTblLingua
     *
     * @return integer
     */
    public function getIdTblLingua()
    {
        return $this->idTblLingua;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return BaseTblCatLink
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
     * Set smartyTemplate
     *
     * @param string $smartyTemplate
     *
     * @return BaseTblCatLink
     */
    public function setSmartyTemplate($smartyTemplate)
    {
        $this->smartyTemplate = $smartyTemplate;

        return $this;
    }

    /**
     * Get smartyTemplate
     *
     * @return string
     */
    public function getSmartyTemplate()
    {
        return $this->smartyTemplate;
    }

    /**
     * Set posizione
     *
     * @param integer $posizione
     *
     * @return BaseTblCatLink
     */
    public function setPosizione($posizione)
    {
        $this->posizione = $posizione;

        return $this;
    }

    /**
     * Get posizione
     *
     * @return integer
     */
    public function getPosizione()
    {
        return $this->posizione;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return BaseTblCatLink
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }
}
