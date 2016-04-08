<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblMessaggi
 *
 * @ORM\Table(name="tbl_messaggi")
 * @ORM\Entity
 */
class TblMessaggi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_messaggi", type="integer", nullable=false)
     */
    private $idTblMessaggi;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=false)
     */
    private $idTblLingua;

    /**
     * @var string
     *
     * @ORM\Column(name="mittente", type="string", length=200, nullable=true)
     */
    private $mittente;

    /**
     * @var string
     *
     * @ORM\Column(name="destinatari", type="string", length=200, nullable=true)
     */
    private $destinatari;

    /**
     * @var string
     *
     * @ORM\Column(name="oggetto", type="string", length=80, nullable=true)
     */
    private $oggetto;

    /**
     * @var string
     *
     * @ORM\Column(name="messaggio", type="text", length=65535, nullable=true)
     */
    private $messaggio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Stato", type="integer", nullable=false)
     */
    private $stato;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_page", type="integer", nullable=false)
     */
    private $idTblPage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datamod", type="date", nullable=false)
     */
    private $datamod;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

