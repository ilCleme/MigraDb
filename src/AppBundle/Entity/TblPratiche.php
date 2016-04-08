<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPratiche
 *
 * @ORM\Table(name="tbl_pratiche")
 * @ORM\Entity
 */
class TblPratiche
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="cognome", type="string", length=100, nullable=true)
     */
    private $cognome;

    /**
     * @var integer
     *
     * @ORM\Column(name="pratica", type="integer", nullable=true)
     */
    private $pratica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datains", type="date", nullable=true)
     */
    private $datains;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_img_stato_pratiche", type="integer", nullable=false)
     */
    private $idTblImgStatoPratiche = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_tipo_mutuo", type="integer", nullable=false)
     */
    private $idTblTipoMutuo = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

