<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblDatimoduli
 *
 * @ORM\Table(name="tbl_datimoduli")
 * @ORM\Entity
 */
class TblDatimoduli
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_session", type="string", length=50, nullable=false)
     */
    private $idSession;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_ping", type="integer", nullable=false)
     */
    private $lastPing;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_form", type="integer", nullable=false)
     */
    private $idTblForm;

    /**
     * @var string
     *
     * @ORM\Column(name="serialize", type="text", length=65535, nullable=true)
     */
    private $serialize;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

