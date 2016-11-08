<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Useronline
 *
 * @ORM\Table(name="useronline", indexes={@ORM\Index(name="ip", columns={"ip", "file"})})
 * @ORM\Entity
 */
class Useronline
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


}

