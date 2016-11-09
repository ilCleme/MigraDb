<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblDocCat
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
     * @ORM\Column(name="id_tbl_doc_cat", type="integer", nullable=true)
     */
    private $idTblDocCat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=true)
     */
    private $title = 'nome tradotto';

    /**
     * @var integer
     *
     * @ORM\Column(name="pos", type="integer", nullable=true)
     */
    private $pos = '11';



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
     * Set idTblDocCat
     *
     * @param integer $idTblDocCat
     *
     * @return BaseTblDocCat
     */
    public function setIdTblDocCat($idTblDocCat)
    {
        $this->idTblDocCat = $idTblDocCat;

        return $this;
    }

    /**
     * Get idTblDocCat
     *
     * @return integer
     */
    public function getIdTblDocCat()
    {
        return $this->idTblDocCat;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblDocCat
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
     * Set title
     *
     * @param string $title
     *
     * @return BaseTblDocCat
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set pos
     *
     * @param integer $pos
     *
     * @return BaseTblDocCat
     */
    public function setPos($pos)
    {
        $this->pos = $pos;

        return $this;
    }

    /**
     * Get pos
     *
     * @return integer
     */
    public function getPos()
    {
        return $this->pos;
    }
}
