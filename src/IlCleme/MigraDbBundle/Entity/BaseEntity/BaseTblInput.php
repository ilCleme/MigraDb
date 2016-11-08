<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblInput
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
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome = 'nome input';

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=50, nullable=true)
     */
    private $tipo = 'tipo input';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=100, nullable=true)
     */
    private $label = 'label input';

    /**
     * @var string
     *
     * @ORM\Column(name="attrs", type="text", length=65535, nullable=true)
     */
    private $attrs;

    /**
     * @var string
     *
     * @ORM\Column(name="filter", type="string", length=200, nullable=true)
     */
    private $filter;

    /**
     * @var string
     *
     * @ORM\Column(name="errmsg", type="string", length=200, nullable=true)
     */
    private $errmsg;

    /**
     * @var string
     *
     * @ORM\Column(name="ruleext", type="string", length=200, nullable=true)
     */
    private $ruleext;

    /**
     * @var string
     *
     * @ORM\Column(name="typectrl", type="string", length=200, nullable=true)
     */
    private $typectrl;

    /**
     * @var string
     *
     * @ORM\Column(name="attrs1", type="text", length=65535, nullable=true)
     */
    private $attrs1;

    /**
     * @var string
     *
     * @ORM\Column(name="attrs2", type="text", length=65535, nullable=true)
     */
    private $attrs2;


}

