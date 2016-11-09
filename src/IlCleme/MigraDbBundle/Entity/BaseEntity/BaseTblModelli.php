<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblModelli
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
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome = 'nome modello di pagina';

    /**
     * @var string
     *
     * @ORM\Column(name="modello", type="blob", length=65535, nullable=true)
     */
    private $modello;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_cat_modelli", type="integer", nullable=true)
     */
    private $idTblCatModelli = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=100, nullable=true)
     */
    private $img = '.gif';



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
     * Set nome
     *
     * @param string $nome
     *
     * @return BaseTblModelli
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
     * Set modello
     *
     * @param string $modello
     *
     * @return BaseTblModelli
     */
    public function setModello($modello)
    {
        $this->modello = $modello;

        return $this;
    }

    /**
     * Get modello
     *
     * @return string
     */
    public function getModello()
    {
        return $this->modello;
    }

    /**
     * Set idTblCatModelli
     *
     * @param integer $idTblCatModelli
     *
     * @return BaseTblModelli
     */
    public function setIdTblCatModelli($idTblCatModelli)
    {
        $this->idTblCatModelli = $idTblCatModelli;

        return $this;
    }

    /**
     * Get idTblCatModelli
     *
     * @return integer
     */
    public function getIdTblCatModelli()
    {
        return $this->idTblCatModelli;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return BaseTblModelli
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
