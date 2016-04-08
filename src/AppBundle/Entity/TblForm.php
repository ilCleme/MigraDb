<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblForm
 *
 * @ORM\Table(name="tbl_form")
 * @ORM\Entity
 */
class TblForm
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome = 'nome form';

    /**
     * @var string
     *
     * @ORM\Column(name="lista_input", type="string", length=255, nullable=true)
     */
    private $listaInput;

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="predefiniti", type="text", length=65535, nullable=true)
     */
    private $predefiniti;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=200, nullable=true)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="smarty", type="string", length=200, nullable=true)
     */
    private $smarty;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

