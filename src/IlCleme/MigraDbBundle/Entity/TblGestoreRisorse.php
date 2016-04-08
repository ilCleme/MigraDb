<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblGestoreRisorse
 *
 * @ORM\Table(name="tbl_gestore_risorse", indexes={@ORM\Index(name="id_utente__session_id", columns={"id_utente", "session_id"}), @ORM\Index(name="risorsa", columns={"risorsa"})})
 * @ORM\Entity
 */
class TblGestoreRisorse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_utente", type="integer", nullable=false)
     */
    private $idUtente;

    /**
     * @var string
     *
     * @ORM\Column(name="azione", type="string", length=255, nullable=false)
     */
    private $azione;

    /**
     * @var string
     *
     * @ORM\Column(name="risorsa", type="string", length=255, nullable=false)
     */
    private $risorsa;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=255, nullable=false)
     */
    private $sessionId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     */
    private $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

