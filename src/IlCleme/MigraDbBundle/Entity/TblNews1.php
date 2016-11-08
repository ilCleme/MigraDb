<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNews1
 *
 * @ORM\Table(name="tbl_news1")
 * @ORM\Entity
 */
class TblNews1
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
     * @ORM\Column(name="id_tbl_news1", type="integer", nullable=true)
     */
    private $idTblNews1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome = 'nome tradotto';

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=100, nullable=true)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=100, nullable=true)
     */
    private $img = '.gif';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_start", type="date", nullable=true)
     */
    private $dataStart = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_end", type="date", nullable=true)
     */
    private $dataEnd = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="id_tbl_page", type="string", length=220, nullable=true)
     */
    private $idTblPage;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_news_cat", type="integer", nullable=true)
     */
    private $idTblNewsCat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sottotitolo", type="text", length=65535, nullable=true)
     */
    private $sottotitolo;



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
     * Set idTblNews1
     *
     * @param integer $idTblNews1
     *
     * @return TblNews1
     */
    public function setIdTblNews1($idTblNews1)
    {
        $this->idTblNews1 = $idTblNews1;

        return $this;
    }

    /**
     * Get idTblNews1
     *
     * @return integer
     */
    public function getIdTblNews1()
    {
        return $this->idTblNews1;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return TblNews1
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
     * @return TblNews1
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
     * Set link
     *
     * @param string $link
     *
     * @return TblNews1
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
     * Set img
     *
     * @param string $img
     *
     * @return TblNews1
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
     * Set dataStart
     *
     * @param \DateTime $dataStart
     *
     * @return TblNews1
     */
    public function setDataStart($dataStart)
    {
        $this->dataStart = $dataStart;

        return $this;
    }

    /**
     * Get dataStart
     *
     * @return \DateTime
     */
    public function getDataStart()
    {
        return $this->dataStart;
    }

    /**
     * Set dataEnd
     *
     * @param \DateTime $dataEnd
     *
     * @return TblNews1
     */
    public function setDataEnd($dataEnd)
    {
        $this->dataEnd = $dataEnd;

        return $this;
    }

    /**
     * Get dataEnd
     *
     * @return \DateTime
     */
    public function getDataEnd()
    {
        return $this->dataEnd;
    }

    /**
     * Set idTblPage
     *
     * @param string $idTblPage
     *
     * @return TblNews1
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
     * Set idTblNewsCat
     *
     * @param integer $idTblNewsCat
     *
     * @return TblNews1
     */
    public function setIdTblNewsCat($idTblNewsCat)
    {
        $this->idTblNewsCat = $idTblNewsCat;

        return $this;
    }

    /**
     * Get idTblNewsCat
     *
     * @return integer
     */
    public function getIdTblNewsCat()
    {
        return $this->idTblNewsCat;
    }

    /**
     * Set posizione
     *
     * @param integer $posizione
     *
     * @return TblNews1
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
     * Set sottotitolo
     *
     * @param string $sottotitolo
     *
     * @return TblNews1
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
}
