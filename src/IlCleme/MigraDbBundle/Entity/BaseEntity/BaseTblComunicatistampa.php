<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblComunicatistampa
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
     * @ORM\Column(name="id_tbl_comunicatistampa", type="integer", nullable=true)
     */
    private $idTblComunicatistampa = '0';

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
    private $titolo;

    /**
     * @var string
     *
     * @ORM\Column(name="sottotitolo", type="string", length=255, nullable=true)
     */
    private $sottotitolo;

    /**
     * @var string
     *
     * @ORM\Column(name="comunicato", type="text", nullable=true)
     */
    private $comunicato;

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
     * @ORM\Column(name="data_inizio_pub", type="date", nullable=false)
     */
    private $dataInizioPub = '0000-00-00';

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
     * @ORM\Column(name="data_comunicato", type="date", nullable=true)
     */
    private $dataComunicato = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_comunicatistampa_cat", type="integer", nullable=true)
     */
    private $idTblComunicatistampaCat = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_preview", type="boolean", nullable=true)
     */
    private $inPreview;



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
     * Set idTblComunicatistampa
     *
     * @param integer $idTblComunicatistampa
     *
     * @return BaseTblComunicatistampa
     */
    public function setIdTblComunicatistampa($idTblComunicatistampa)
    {
        $this->idTblComunicatistampa = $idTblComunicatistampa;

        return $this;
    }

    /**
     * Get idTblComunicatistampa
     *
     * @return integer
     */
    public function getIdTblComunicatistampa()
    {
        return $this->idTblComunicatistampa;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblComunicatistampa
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
     * @return BaseTblComunicatistampa
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
     * @return BaseTblComunicatistampa
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
     * @return BaseTblComunicatistampa
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
     * Set comunicato
     *
     * @param string $comunicato
     *
     * @return BaseTblComunicatistampa
     */
    public function setComunicato($comunicato)
    {
        $this->comunicato = $comunicato;

        return $this;
    }

    /**
     * Get comunicato
     *
     * @return string
     */
    public function getComunicato()
    {
        return $this->comunicato;
    }

    /**
     * Set searchable
     *
     * @param string $searchable
     *
     * @return BaseTblComunicatistampa
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
     * @return BaseTblComunicatistampa
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
     * @return BaseTblComunicatistampa
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
     * @return BaseTblComunicatistampa
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
     * @return BaseTblComunicatistampa
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
     * @return BaseTblComunicatistampa
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
     * @return BaseTblComunicatistampa
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
     * @return BaseTblComunicatistampa
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
     * Set dataComunicato
     *
     * @param \DateTime $dataComunicato
     *
     * @return BaseTblComunicatistampa
     */
    public function setDataComunicato($dataComunicato)
    {
        $this->dataComunicato = $dataComunicato;

        return $this;
    }

    /**
     * Get dataComunicato
     *
     * @return \DateTime
     */
    public function getDataComunicato()
    {
        return $this->dataComunicato;
    }

    /**
     * Set idTblComunicatistampaCat
     *
     * @param integer $idTblComunicatistampaCat
     *
     * @return BaseTblComunicatistampa
     */
    public function setIdTblComunicatistampaCat($idTblComunicatistampaCat)
    {
        $this->idTblComunicatistampaCat = $idTblComunicatistampaCat;

        return $this;
    }

    /**
     * Get idTblComunicatistampaCat
     *
     * @return integer
     */
    public function getIdTblComunicatistampaCat()
    {
        return $this->idTblComunicatistampaCat;
    }

    /**
     * Set inPreview
     *
     * @param boolean $inPreview
     *
     * @return BaseTblComunicatistampa
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
}
