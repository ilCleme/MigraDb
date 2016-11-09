<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblAgenda
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
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="sottotitolo", type="string", length=200, nullable=true)
     */
    private $sottotitolo = 'sottotitolo';

    /**
     * @var string
     *
     * @ORM\Column(name="listadata", type="string", length=200, nullable=true)
     */
    private $listadata;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_cat_agenda", type="integer", nullable=true)
     */
    private $idTblCatAgenda;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=200, nullable=false)
     */
    private $link = '';



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
     * @return BaseTblAgenda
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
     * Set sottotitolo
     *
     * @param string $sottotitolo
     *
     * @return BaseTblAgenda
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
     * Set listadata
     *
     * @param string $listadata
     *
     * @return BaseTblAgenda
     */
    public function setListadata($listadata)
    {
        $this->listadata = $listadata;

        return $this;
    }

    /**
     * Get listadata
     *
     * @return string
     */
    public function getListadata()
    {
        return $this->listadata;
    }

    /**
     * Set idTblCatAgenda
     *
     * @param integer $idTblCatAgenda
     *
     * @return BaseTblAgenda
     */
    public function setIdTblCatAgenda($idTblCatAgenda)
    {
        $this->idTblCatAgenda = $idTblCatAgenda;

        return $this;
    }

    /**
     * Get idTblCatAgenda
     *
     * @return integer
     */
    public function getIdTblCatAgenda()
    {
        return $this->idTblCatAgenda;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return BaseTblAgenda
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
