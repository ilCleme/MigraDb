<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblDatimoduli
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
     * @ORM\Column(name="id_session", type="string", length=50, nullable=false)
     */
    private $idSession = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_ping", type="integer", nullable=false)
     */
    private $lastPing = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_form", type="integer", nullable=false)
     */
    private $idTblForm = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="serialize", type="text", length=65535, nullable=true)
     */
    private $serialize;


}

