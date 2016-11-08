<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseGestSpecial
{
    /**
     * @var string
     *
     * @ORM\Column(name="tablename", type="string", length=100)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tablename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fieldname", type="string", length=100)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fieldname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=100, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=100, nullable=true)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="tabella", type="string", length=254, nullable=true)
     */
    private $tabella;

    /**
     * @var boolean
     *
     * @ORM\Column(name="size", type="boolean", nullable=true)
     */
    private $size;
}