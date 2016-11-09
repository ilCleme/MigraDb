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
     * Set idSession
     *
     * @param string $idSession
     *
     * @return BaseTblDatimoduli
     */
    public function setIdSession($idSession)
    {
        $this->idSession = $idSession;

        return $this;
    }

    /**
     * Get idSession
     *
     * @return string
     */
    public function getIdSession()
    {
        return $this->idSession;
    }

    /**
     * Set lastPing
     *
     * @param integer $lastPing
     *
     * @return BaseTblDatimoduli
     */
    public function setLastPing($lastPing)
    {
        $this->lastPing = $lastPing;

        return $this;
    }

    /**
     * Get lastPing
     *
     * @return integer
     */
    public function getLastPing()
    {
        return $this->lastPing;
    }

    /**
     * Set idTblForm
     *
     * @param integer $idTblForm
     *
     * @return BaseTblDatimoduli
     */
    public function setIdTblForm($idTblForm)
    {
        $this->idTblForm = $idTblForm;

        return $this;
    }

    /**
     * Get idTblForm
     *
     * @return integer
     */
    public function getIdTblForm()
    {
        return $this->idTblForm;
    }

    /**
     * Set serialize
     *
     * @param string $serialize
     *
     * @return BaseTblDatimoduli
     */
    public function setSerialize($serialize)
    {
        $this->serialize = $serialize;

        return $this;
    }

    /**
     * Get serialize
     *
     * @return string
     */
    public function getSerialize()
    {
        return $this->serialize;
    }
}
