<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblPhoto
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
     * @ORM\Column(name="id_tbl_photo", type="integer", nullable=true)
     */
    private $idTblPhoto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    private $idTblLingua = '4';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_page", type="integer", nullable=true)
     */
    private $idTblPage = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome = 'nome tradotto';

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=true)
     */
    private $img = '.gif';

    /**
     * @var string
     *
     * @ORM\Column(name="img_big", type="string", length=255, nullable=true)
     */
    private $imgBig = '.gif';

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
     * @var integer
     *
     * @ORM\Column(name="id_tbl_photo_cat", type="integer", nullable=true)
     */
    private $idTblPhotoCat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="pub", type="integer", nullable=true)
     */
    private $pub = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datamod", type="datetime", nullable=true)
     */
    private $datamod;

    /**
     * @var string
     *
     * @ORM\Column(name="didascalia", type="text", length=65535, nullable=true)
     */
    private $didascalia;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=true)
     */
    private $link = '.gif';



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
     * Set idTblPhoto
     *
     * @param integer $idTblPhoto
     *
     * @return BaseTblPhoto
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
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblPhoto
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
     * Set idTblPage
     *
     * @param integer $idTblPage
     *
     * @return BaseTblPhoto
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
     * Set nome
     *
     * @param string $nome
     *
     * @return BaseTblPhoto
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
     * Set img
     *
     * @param string $img
     *
     * @return BaseTblPhoto
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
     * Set imgBig
     *
     * @param string $imgBig
     *
     * @return BaseTblPhoto
     */
    public function setImgBig($imgBig)
    {
        $this->imgBig = $imgBig;

        return $this;
    }

    /**
     * Get imgBig
     *
     * @return string
     */
    public function getImgBig()
    {
        return $this->imgBig;
    }

    /**
     * Set thumbnailX
     *
     * @param integer $thumbnailX
     *
     * @return BaseTblPhoto
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
     * @return BaseTblPhoto
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

    /**
     * Set idTblPhotoCat
     *
     * @param integer $idTblPhotoCat
     *
     * @return BaseTblPhoto
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
     * Set posizione
     *
     * @param integer $posizione
     *
     * @return BaseTblPhoto
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
     * Set pub
     *
     * @param integer $pub
     *
     * @return BaseTblPhoto
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
     * Set datamod
     *
     * @param \DateTime $datamod
     *
     * @return BaseTblPhoto
     */
    public function setDatamod($datamod)
    {
        $this->datamod = $datamod;

        return $this;
    }

    /**
     * Get datamod
     *
     * @return \DateTime
     */
    public function getDatamod()
    {
        return $this->datamod;
    }

    /**
     * Set didascalia
     *
     * @param string $didascalia
     *
     * @return BaseTblPhoto
     */
    public function setDidascalia($didascalia)
    {
        $this->didascalia = $didascalia;

        return $this;
    }

    /**
     * Get didascalia
     *
     * @return string
     */
    public function getDidascalia()
    {
        return $this->didascalia;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return BaseTblPhoto
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
}
