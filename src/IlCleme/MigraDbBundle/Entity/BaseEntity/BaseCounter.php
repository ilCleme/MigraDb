<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
abstract class BaseCounter
{
    /**
     * @var string
     *
     * @ORM\Column(name="page", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $page = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hit", type="integer", nullable=false)
     */
    private $hit = '0';


}

