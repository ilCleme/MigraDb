<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblQtool
 *
 * @ORM\Table(name="tbl_qtool")
 * @ORM\Entity
 */
class TblQtool
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
     * @ORM\Column(name="nome", type="string", length=30, nullable=true)
     */
    private $nome = 'nome';

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_tbl_gruppi", type="string", length=150, nullable=true)
     */
    private $checkboxTblGruppi = ',,';

    /**
     * @var string
     *
     * @ORM\Column(name="plugin", type="string", length=200, nullable=true)
     */
    private $plugin;

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '10';

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=255, nullable=true)
     */
    private $template;


}

