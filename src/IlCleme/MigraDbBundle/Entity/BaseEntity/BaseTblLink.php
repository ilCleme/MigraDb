<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblLink
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
     * @ORM\Column(name="id_padre", type="integer", nullable=false)
     */
    private $idPadre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_link", type="integer", nullable=false)
     */
    private $idTblLink;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=false)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=false)
     */
    private $nome = 'nome link';

    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="text", nullable=false)
     */
    private $descrizione;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=150, nullable=false)
     */
    private $link = 'http://';

    /**
     * @var string
     *
     * @ORM\Column(name="linkfile", type="string", length=255, nullable=true)
     */
    private $linkfile;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=150, nullable=true)
     */
    private $img = '.gif';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_cat_link", type="integer", nullable=false)
     */
    private $idTblCatLink = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_target", type="integer", nullable=true)
     */
    private $idTblTarget = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione;

    /**
     * @var integer
     *
     * @ORM\Column(name="lightbox", type="integer", nullable=false)
     */
    private $lightbox;



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
     * Set idPadre
     *
     * @param integer $idPadre
     *
     * @return BaseTblLink
     */
    public function setIdPadre($idPadre)
    {
        $this->idPadre = $idPadre;

        return $this;
    }

    /**
     * Get idPadre
     *
     * @return integer
     */
    public function getIdPadre()
    {
        return $this->idPadre;
    }

    /**
     * Set idTblLink
     *
     * @param integer $idTblLink
     *
     * @return BaseTblLink
     */
    public function setIdTblLink($idTblLink)
    {
        $this->idTblLink = $idTblLink;

        return $this;
    }

    /**
     * Get idTblLink
     *
     * @return integer
     */
    public function getIdTblLink()
    {
        return $this->idTblLink;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblLink
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
     * @return BaseTblLink
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
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return BaseTblLink
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return BaseTblLink
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set linkfile
     *
     * @param string $linkfile
     *
     * @return BaseTblLink
     */
    public function setLinkfile($linkfile)
    {
        $this->linkfile = $linkfile;

        return $this;
    }

    /**
     * Get linkfile
     *
     * @return string
     */
    public function getLinkfile()
    {
        return $this->linkfile;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return BaseTblLink
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

    /**
     * Set idTblCatLink
     *
     * @param integer $idTblCatLink
     *
     * @return BaseTblLink
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
     * Set idTblTarget
     *
     * @param integer $idTblTarget
     *
     * @return BaseTblLink
     */
    public function setIdTblTarget($idTblTarget)
    {
        $this->idTblTarget = $idTblTarget;

        return $this;
    }

    /**
     * Get idTblTarget
     *
     * @return integer
     */
    public function getIdTblTarget()
    {
        return $this->idTblTarget;
    }

    /**
     * Set posizione
     *
     * @param integer $posizione
     *
     * @return BaseTblLink
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
     * Set lightbox
     *
     * @param integer $lightbox
     *
     * @return BaseTblLink
     */
    public function setLightbox($lightbox)
    {
        $this->lightbox = $lightbox;

        return $this;
    }

    /**
     * Get lightbox
     *
     * @return integer
     */
    public function getLightbox()
    {
        return $this->lightbox;
    }
}
