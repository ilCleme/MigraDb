<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblGruppi
 *
 * @ORM\Table(name="tbl_gruppi")
 * @ORM\Entity
 */
class TblGruppi
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
     * @ORM\Column(name="nome", type="string", length=50, nullable=false)
     */
    private $nome = 'nome';

    /**
     * @var string
     *
     * @ORM\Column(name="descr", type="string", length=70, nullable=false)
     */
    private $descr = 'desc';


}

