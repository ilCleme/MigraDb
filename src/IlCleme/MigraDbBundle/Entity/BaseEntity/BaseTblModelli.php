<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblModelli
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
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome = 'nome modello di pagina';

    /**
     * @var string
     *
     * @ORM\Column(name="modello", type="blob", length=65535, nullable=true)
     */
    private $modello;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_cat_modelli", type="integer", nullable=true)
     */
    private $idTblCatModelli = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=100, nullable=true)
     */
    private $img = '.gif';


}

