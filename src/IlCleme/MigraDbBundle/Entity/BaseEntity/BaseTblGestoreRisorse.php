<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblGestoreRisorse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
    private $startTime = 'CURRENT_TIMESTAMP';


}

