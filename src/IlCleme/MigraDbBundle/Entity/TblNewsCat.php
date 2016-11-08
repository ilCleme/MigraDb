<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNewsCat
 *
 * @ORM\Table(name="tbl_news_cat")
 * @ORM\Entity
 */
class TblNewsCat
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
     * @ORM\Column(name="id_tbl_news_cat", type="integer", nullable=true)
     */
    private $idTblNewsCat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome = 'nome tradotto';

    /**
     * @var integer
     *
     * @ORM\Column(name="num", type="integer", nullable=true)
     */
    private $num = '5';

    /**
     * @var string
     *
     * @ORM\Column(name="smarty_template", type="string", length=200, nullable=true)
     */
    private $smartyTemplate = 'news.tpl';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '11';



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
     * Set idTblNewsCat
     *
     * @param integer $idTblNewsCat
     *
     * @return TblNewsCat
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
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return TblNewsCat
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
     * @return TblNewsCat
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
     * Set num
     *
     * @param integer $num
     *
     * @return TblNewsCat
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set smartyTemplate
     *
     * @param string $smartyTemplate
     *
     * @return TblNewsCat
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
     * @return TblNewsCat
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
}
