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
     * Set idUtente
     *
     * @param integer $idUtente
     *
     * @return BaseTblGestoreRisorse
     */
    public function setIdUtente($idUtente)
    {
        $this->idUtente = $idUtente;

        return $this;
    }

    /**
     * Get idUtente
     *
     * @return integer
     */
    public function getIdUtente()
    {
        return $this->idUtente;
    }

    /**
     * Set azione
     *
     * @param string $azione
     *
     * @return BaseTblGestoreRisorse
     */
    public function setAzione($azione)
    {
        $this->azione = $azione;

        return $this;
    }

    /**
     * Get azione
     *
     * @return string
     */
    public function getAzione()
    {
        return $this->azione;
    }

    /**
     * Set risorsa
     *
     * @param string $risorsa
     *
     * @return BaseTblGestoreRisorse
     */
    public function setRisorsa($risorsa)
    {
        $this->risorsa = $risorsa;

        return $this;
    }

    /**
     * Get risorsa
     *
     * @return string
     */
    public function getRisorsa()
    {
        return $this->risorsa;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return BaseTblGestoreRisorse
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set sessionId
     *
     * @param string $sessionId
     *
     * @return BaseTblGestoreRisorse
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return BaseTblGestoreRisorse
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
}
