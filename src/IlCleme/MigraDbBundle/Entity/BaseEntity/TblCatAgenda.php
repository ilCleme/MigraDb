<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCatAgenda
 *
 * @ORM\Table(name="tbl_cat_agenda")
 * @ORM\Entity
 */
class TblCatAgenda
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
     * @var integer
     *
     * @ORM\Column(name="id_padre", type="integer", nullable=true)
     */
    private $idPadre;

    /**
     * @var string
     *
     * @ORM\Column(name="icona", type="string", length=80, nullable=true)
     */
    private $icona = '.gif';


}

