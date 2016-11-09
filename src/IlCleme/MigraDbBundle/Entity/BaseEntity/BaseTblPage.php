<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblPage
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
     * @ORM\Column(name="id_tbl_page", type="integer", nullable=true)
     */
    private $idTblPage = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=250, nullable=true)
     */
    private $nome = 'nome tradotto';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_menu", type="integer", nullable=true)
     */
    private $idTblMenu = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_tbl_gruppi", type="string", length=200, nullable=true)
     */
    private $checkboxTblGruppi = ',,';

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_tbl_service", type="string", length=200, nullable=true)
     */
    private $checkboxTblService = ',,';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_tipo_pagina", type="integer", nullable=true)
     */
    private $idTblTipoPagina = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_photo", type="integer", nullable=true)
     */
    private $idTblPhoto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="abs", type="text", nullable=true)
     */
    private $abs;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=true)
     */
    private $img;

    /**
     * @var integer
     *
     * @ORM\Column(name="pub", type="integer", nullable=true)
     */
    private $pub = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="utentemod", type="string", length=100, nullable=true)
     */
    private $utentemod = 'pippo (182.1.1.1)';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_photo_cat", type="integer", nullable=true)
     */
    private $idTblPhotoCat = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_title", type="string", length=255, nullable=true)
     */
    private $metaTagTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_charset", type="string", length=30, nullable=true)
     */
    private $metaTagCharset;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_generator", type="string", length=255, nullable=true)
     */
    private $metaTagGenerator;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_author", type="string", length=255, nullable=true)
     */
    private $metaTagAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_description", type="string", length=255, nullable=true)
     */
    private $metaTagDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_keywords", type="string", length=255, nullable=true)
     */
    private $metaTagKeywords;

    /**
     * @var string
     *
     * @ORM\Column(name="img_small", type="string", length=255, nullable=true)
     */
    private $imgSmall;

    /**
     * @var integer
     *
     * @ORM\Column(name="thumbnail_x", type="integer", nullable=true)
     */
    private $thumbnailX;

    /**
     * @var integer
     *
     * @ORM\Column(name="thumbnail_y", type="integer", nullable=true)
     */
    private $thumbnailY;



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
     * Set idTblPage
     *
     * @param integer $idTblPage
     *
     * @return BaseTblPage
     */
    public function setIdTblPage($idTblPage)
    {
        $this->idTblPage = $idTblPage;

        return $this;
    }

    /**
     * Get idTblPage
     *
     * @return integer
     */
    public function getIdTblPage()
    {
        return $this->idTblPage;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblPage
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
     * @return BaseTblPage
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
     * Set idTblMenu
     *
     * @param integer $idTblMenu
     *
     * @return BaseTblPage
     */
    public function setIdTblMenu($idTblMenu)
    {
        $this->idTblMenu = $idTblMenu;

        return $this;
    }

    /**
     * Get idTblMenu
     *
     * @return integer
     */
    public function getIdTblMenu()
    {
        return $this->idTblMenu;
    }

    /**
     * Set posizione
     *
     * @param integer $posizione
     *
     * @return BaseTblPage
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
     * Set checkboxTblGruppi
     *
     * @param string $checkboxTblGruppi
     *
     * @return BaseTblPage
     */
    public function setCheckboxTblGruppi($checkboxTblGruppi)
    {
        $this->checkboxTblGruppi = $checkboxTblGruppi;

        return $this;
    }

    /**
     * Get checkboxTblGruppi
     *
     * @return string
     */
    public function getCheckboxTblGruppi()
    {
        return $this->checkboxTblGruppi;
    }

    /**
     * Set checkboxTblService
     *
     * @param string $checkboxTblService
     *
     * @return BaseTblPage
     */
    public function setCheckboxTblService($checkboxTblService)
    {
        $this->checkboxTblService = $checkboxTblService;

        return $this;
    }

    /**
     * Get checkboxTblService
     *
     * @return string
     */
    public function getCheckboxTblService()
    {
        return $this->checkboxTblService;
    }

    /**
     * Set idTblTipoPagina
     *
     * @param integer $idTblTipoPagina
     *
     * @return BaseTblPage
     */
    public function setIdTblTipoPagina($idTblTipoPagina)
    {
        $this->idTblTipoPagina = $idTblTipoPagina;

        return $this;
    }

    /**
     * Get idTblTipoPagina
     *
     * @return integer
     */
    public function getIdTblTipoPagina()
    {
        return $this->idTblTipoPagina;
    }

    /**
     * Set idTblPhoto
     *
     * @param integer $idTblPhoto
     *
     * @return BaseTblPage
     */
    public function setIdTblPhoto($idTblPhoto)
    {
        $this->idTblPhoto = $idTblPhoto;

        return $this;
    }

    /**
     * Get idTblPhoto
     *
     * @return integer
     */
    public function getIdTblPhoto()
    {
        return $this->idTblPhoto;
    }

    /**
     * Set abs
     *
     * @param string $abs
     *
     * @return BaseTblPage
     */
    public function setAbs($abs)
    {
        $this->abs = $abs;

        return $this;
    }

    /**
     * Get abs
     *
     * @return string
     */
    public function getAbs()
    {
        return $this->abs;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return BaseTblPage
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
     * Set pub
     *
     * @param integer $pub
     *
     * @return BaseTblPage
     */
    public function setPub($pub)
    {
        $this->pub = $pub;

        return $this;
    }

    /**
     * Get pub
     *
     * @return integer
     */
    public function getPub()
    {
        return $this->pub;
    }

    /**
     * Set utentemod
     *
     * @param string $utentemod
     *
     * @return BaseTblPage
     */
    public function setUtentemod($utentemod)
    {
        $this->utentemod = $utentemod;

        return $this;
    }

    /**
     * Get utentemod
     *
     * @return string
     */
    public function getUtentemod()
    {
        return $this->utentemod;
    }

    /**
     * Set idTblPhotoCat
     *
     * @param integer $idTblPhotoCat
     *
     * @return BaseTblPage
     */
    public function setIdTblPhotoCat($idTblPhotoCat)
    {
        $this->idTblPhotoCat = $idTblPhotoCat;

        return $this;
    }

    /**
     * Get idTblPhotoCat
     *
     * @return integer
     */
    public function getIdTblPhotoCat()
    {
        return $this->idTblPhotoCat;
    }

    /**
     * Set metaTagTitle
     *
     * @param string $metaTagTitle
     *
     * @return BaseTblPage
     */
    public function setMetaTagTitle($metaTagTitle)
    {
        $this->metaTagTitle = $metaTagTitle;

        return $this;
    }

    /**
     * Get metaTagTitle
     *
     * @return string
     */
    public function getMetaTagTitle()
    {
        return $this->metaTagTitle;
    }

    /**
     * Set metaTagCharset
     *
     * @param string $metaTagCharset
     *
     * @return BaseTblPage
     */
    public function setMetaTagCharset($metaTagCharset)
    {
        $this->metaTagCharset = $metaTagCharset;

        return $this;
    }

    /**
     * Get metaTagCharset
     *
     * @return string
     */
    public function getMetaTagCharset()
    {
        return $this->metaTagCharset;
    }

    /**
     * Set metaTagGenerator
     *
     * @param string $metaTagGenerator
     *
     * @return BaseTblPage
     */
    public function setMetaTagGenerator($metaTagGenerator)
    {
        $this->metaTagGenerator = $metaTagGenerator;

        return $this;
    }

    /**
     * Get metaTagGenerator
     *
     * @return string
     */
    public function getMetaTagGenerator()
    {
        return $this->metaTagGenerator;
    }

    /**
     * Set metaTagAuthor
     *
     * @param string $metaTagAuthor
     *
     * @return BaseTblPage
     */
    public function setMetaTagAuthor($metaTagAuthor)
    {
        $this->metaTagAuthor = $metaTagAuthor;

        return $this;
    }

    /**
     * Get metaTagAuthor
     *
     * @return string
     */
    public function getMetaTagAuthor()
    {
        return $this->metaTagAuthor;
    }

    /**
     * Set metaTagDescription
     *
     * @param string $metaTagDescription
     *
     * @return BaseTblPage
     */
    public function setMetaTagDescription($metaTagDescription)
    {
        $this->metaTagDescription = $metaTagDescription;

        return $this;
    }

    /**
     * Get metaTagDescription
     *
     * @return string
     */
    public function getMetaTagDescription()
    {
        return $this->metaTagDescription;
    }

    /**
     * Set metaTagKeywords
     *
     * @param string $metaTagKeywords
     *
     * @return BaseTblPage
     */
    public function setMetaTagKeywords($metaTagKeywords)
    {
        $this->metaTagKeywords = $metaTagKeywords;

        return $this;
    }

    /**
     * Get metaTagKeywords
     *
     * @return string
     */
    public function getMetaTagKeywords()
    {
        return $this->metaTagKeywords;
    }

    /**
     * Set imgSmall
     *
     * @param string $imgSmall
     *
     * @return BaseTblPage
     */
    public function setImgSmall($imgSmall)
    {
        $this->imgSmall = $imgSmall;

        return $this;
    }

    /**
     * Get imgSmall
     *
     * @return string
     */
    public function getImgSmall()
    {
        return $this->imgSmall;
    }

    /**
     * Set thumbnailX
     *
     * @param integer $thumbnailX
     *
     * @return BaseTblPage
     */
    public function setThumbnailX($thumbnailX)
    {
        $this->thumbnailX = $thumbnailX;

        return $this;
    }

    /**
     * Get thumbnailX
     *
     * @return integer
     */
    public function getThumbnailX()
    {
        return $this->thumbnailX;
    }

    /**
     * Set thumbnailY
     *
     * @param integer $thumbnailY
     *
     * @return BaseTblPage
     */
    public function setThumbnailY($thumbnailY)
    {
        $this->thumbnailY = $thumbnailY;

        return $this;
    }

    /**
     * Get thumbnailY
     *
     * @return integer
     */
    public function getThumbnailY()
    {
        return $this->thumbnailY;
    }
}
