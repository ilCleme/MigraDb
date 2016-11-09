<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseUseronline
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
     * @var integer
     *
     * @ORM\Column(name="zeit", type="integer", nullable=false)
     */
    private $zeit = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=50, nullable=false)
     */
    private $file;



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
     * Set zeit
     *
     * @param integer $zeit
     *
     * @return BaseUseronline
     */
    public function setZeit($zeit)
    {
        $this->zeit = $zeit;

        return $this;
    }

    /**
     * Get zeit
     *
     * @return integer
     */
    public function getZeit()
    {
        return $this->zeit;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return BaseUseronline
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
     * Set file
     *
     * @param string $file
     *
     * @return BaseUseronline
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }
}
