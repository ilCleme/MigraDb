<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAgenda
 *
 * @ORM\Table(name="tbl_agenda")
 * @ORM\Entity
 */
class TblAgenda
{
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
    private $sottotitolo;

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
    private $link;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

