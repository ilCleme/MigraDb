<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCatModelli
 *
 * @ORM\Table(name="tbl_cat_modelli")
 * @ORM\Entity
 */
class TblCatModelli
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
     * @ORM\Column(name="nome", type="string", length=80, nullable=false)
     */
    private $nome = 'nome categoria modello di pagina';


}

