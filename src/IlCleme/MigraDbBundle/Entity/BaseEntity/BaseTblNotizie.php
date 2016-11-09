<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Config\Definition\Exception\Exception;

/** @ORM\MappedSuperclass */
class BaseTblNotizie
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
     * @ORM\Column(name="id_tbl_notizie", type="integer", nullable=true)
     */
    private $idTblNotizie = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="cod", type="string", length=255, nullable=true)
     */
    private $cod;

    /**
     * @var string
     *
     * @ORM\Column(name="titolo", type="string", length=255, nullable=false)
     */
    private $titolo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sottotitolo", type="string", length=255, nullable=false)
     */
    private $sottotitolo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="notizia", type="text", nullable=true)
     */
    private $notizia;

    /**
     * @var string
     *
     * @ORM\Column(name="searchable", type="text", nullable=true)
     */
    private $searchable;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=100, nullable=true)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="id_tbl_page", type="string", length=255, nullable=true)
     */
    private $idTblPage;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=100, nullable=true)
     */
    private $img;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pub", type="boolean", nullable=true)
     */
    private $pub;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inizio_pub", type="date", nullable=true)
     */
    private $dataInizioPub;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_fine_pub", type="date", nullable=true)
     */
    private $dataFinePub;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_fine_pub_preview", type="date", nullable=true)
     */
    private $dataFinePubPreview;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_notizia", type="date", nullable=true)
     */
    private $dataNotizia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_notizie_cat", type="integer", nullable=true)
     */
    private $idTblNotizieCat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_preview", type="boolean", nullable=true)
     */
    private $inPreview;

    /**
     * @var array
     *
     * @ORM\Column(name="in_preview_where", type="simple_array", nullable=true)
     */
    private $inPreviewWhere;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_agenda", type="integer", nullable=true)
     */
    private $idTblAgenda;

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_agenda", type="boolean", nullable=false)
     */
    private $haveAgenda = '0';



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
     * Set idTblNotizie
     *
     * @param integer $idTblNotizie
     *
     * @return BaseTblNotizie
     */
    public function setIdTblNotizie($idTblNotizie)
    {
        $this->idTblNotizie = $idTblNotizie;

        return $this;
    }

    /**
     * Get idTblNotizie
     *
     * @return integer
     */
    public function getIdTblNotizie()
    {
        return $this->idTblNotizie;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblNotizie
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
     * Set cod
     *
     * @param string $cod
     *
     * @return BaseTblNotizie
     */
    public function setCod($cod)
    {
        $this->cod = $cod;

        return $this;
    }

    /**
     * Get cod
     *
     * @return string
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return BaseTblNotizie
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set sottotitolo
     *
     * @param string $sottotitolo
     *
     * @return BaseTblNotizie
     */
    public function setSottotitolo($sottotitolo)
    {
        $this->sottotitolo = $sottotitolo;

        return $this;
    }

    /**
     * Get sottotitolo
     *
     * @return string
     */
    public function getSottotitolo()
    {
        return $this->sottotitolo;
    }

    /**
     * Set notizia
     *
     * @param string $notizia
     *
     * @return BaseTblNotizie
     */
    public function setNotizia($notizia)
    {
        $this->notizia = $notizia;

        return $this;
    }

    /**
     * Get notizia
     *
     * @return string
     */
    public function getNotizia()
    {
        return $this->notizia;
    }

    /**
     * Set searchable
     *
     * @param string $searchable
     *
     * @return BaseTblNotizie
     */
    public function setSearchable($searchable)
    {
        $this->searchable = $searchable;

        return $this;
    }

    /**
     * Get searchable
     *
     * @return string
     */
    public function getSearchable()
    {
        return $this->searchable;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return BaseTblNotizie
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
     * Set idTblPage
     *
     * @param string $idTblPage
     *
     * @return BaseTblNotizie
     */
    public function setIdTblPage($idTblPage)
    {
        $this->idTblPage = $idTblPage;

        return $this;
    }

    /**
     * Get idTblPage
     *
     * @return string
     */
    public function getIdTblPage()
    {
        return $this->idTblPage;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return BaseTblNotizie
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
     * @param boolean $pub
     *
     * @return BaseTblNotizie
     */
    public function setPub($pub)
    {
        $this->pub = $pub;

        return $this;
    }

    /**
     * Get pub
     *
     * @return boolean
     */
    public function getPub()
    {
        return $this->pub;
    }

    /**
     * Set dataInizioPub
     *
     * @param \DateTime $dataInizioPub
     *
     * @return BaseTblNotizie
     */
    public function setDataInizioPub($dataInizioPub)
    {
        $this->dataInizioPub = $dataInizioPub;

        return $this;
    }

    /**
     * Get dataInizioPub
     *
     * @return \DateTime
     */
    public function getDataInizioPub()
    {
        return $this->dataInizioPub;
    }

    /**
     * Set dataFinePub
     *
     * @param \DateTime $dataFinePub
     *
     * @return BaseTblNotizie
     */
    public function setDataFinePub($dataFinePub)
    {
        $this->dataFinePub = $dataFinePub;

        return $this;
    }

    /**
     * Get dataFinePub
     *
     * @return \DateTime
     */
    public function getDataFinePub()
    {
        return $this->dataFinePub;
    }

    /**
     * Set dataFinePubPreview
     *
     * @param \DateTime $dataFinePubPreview
     *
     * @return BaseTblNotizie
     */
    public function setDataFinePubPreview($dataFinePubPreview)
    {
        $this->dataFinePubPreview = $dataFinePubPreview;

        return $this;
    }

    /**
     * Get dataFinePubPreview
     *
     * @return \DateTime
     */
    public function getDataFinePubPreview()
    {
        return $this->dataFinePubPreview;
    }

    /**
     * Set dataNotizia
     *
     * @param \DateTime $dataNotizia
     *
     * @return BaseTblNotizie
     */
    public function setDataNotizia($dataNotizia)
    {
        $this->dataNotizia = $dataNotizia;

        return $this;
    }

    /**
     * Get dataNotizia
     *
     * @return \DateTime
     */
    public function getDataNotizia()
    {
        return $this->dataNotizia;
    }

    /**
     * Set idTblNotizieCat
     *
     * @param integer $idTblNotizieCat
     *
     * @return BaseTblNotizie
     */
    public function setIdTblNotizieCat($idTblNotizieCat)
    {
        $this->idTblNotizieCat = $idTblNotizieCat;

        return $this;
    }

    /**
     * Get idTblNotizieCat
     *
     * @return integer
     */
    public function getIdTblNotizieCat()
    {
        return $this->idTblNotizieCat;
    }

    /**
     * Set inPreview
     *
     * @param boolean $inPreview
     *
     * @return BaseTblNotizie
     */
    public function setInPreview($inPreview)
    {
        $this->inPreview = $inPreview;

        return $this;
    }

    /**
     * Get inPreview
     *
     * @return boolean
     */
    public function getInPreview()
    {
        return $this->inPreview;
    }

    /**
     * Set inPreviewWhere
     *
     * @param array $inPreviewWhere
     *
     * @return BaseTblNotizie
     */
    public function setInPreviewWhere($inPreviewWhere)
    {
        $this->inPreviewWhere = $inPreviewWhere;

        return $this;
    }

    /**
     * Get inPreviewWhere
     *
     * @return array
     */
    public function getInPreviewWhere()
    {
        return $this->inPreviewWhere;
    }

    /**
     * Set idTblAgenda
     *
     * @param integer $idTblAgenda
     *
     * @return BaseTblNotizie
     */
    public function setIdTblAgenda($idTblAgenda)
    {
        $this->idTblAgenda = $idTblAgenda;

        return $this;
    }

    /**
     * Get idTblAgenda
     *
     * @return integer
     */
    public function getIdTblAgenda()
    {
        return $this->idTblAgenda;
    }

    /**
     * Set haveAgenda
     *
     * @param boolean $haveAgenda
     *
     * @return BaseTblNotizie
     */
    public function setHaveAgenda($haveAgenda)
    {
        $this->haveAgenda = $haveAgenda;

        return $this;
    }

    /**
     * Get haveAgenda
     *
     * @return boolean
     */
    public function getHaveAgenda()
    {
        return $this->haveAgenda;
    }

    /**
     * _toString
     *
     * Return this object as a string
     * @return string
     */
    public function __toString()
    {
        try{
            $string = '';
            foreach ($this as $key => $value) {
                if(!is_null($value)){
                    if(is_string($value) || is_integer($value) || is_bool($value)){
                        $string = $string . "$value";
                    }
                }
            }
        } catch(Exception $e){
            dump($e);
        }


        return $string;
    }
}
