<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblPhotoCat
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
     * @ORM\Column(name="id_padre", type="integer", nullable=true)
     */
    private $idPadre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_photo_cat", type="integer", nullable=true)
     */
    private $idTblPhotoCat = '0';

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
    private $smartyTemplate = 'album.tpl';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '0';



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
     * @return BaseTblPhotoCat
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
     * Set idTblPhotoCat
     *
     * @param integer $idTblPhotoCat
     *
     * @return BaseTblPhotoCat
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
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblPhotoCat
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
     * @return BaseTblPhotoCat
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
     * @return BaseTblPhotoCat
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
     * @return BaseTblPhotoCat
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
     * @return BaseTblPhotoCat
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
