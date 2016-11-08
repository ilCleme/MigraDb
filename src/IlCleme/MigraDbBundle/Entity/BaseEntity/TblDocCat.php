<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblDocCat
 *
 * @ORM\Table(name="tbl_doc_cat")
 * @ORM\Entity
 */
class TblDocCat
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
     * @ORM\Column(name="id_tbl_doc_cat", type="integer", nullable=true)
     */
    private $idTblDocCat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=true)
     */
    private $title = 'nome tradotto';

    /**
     * @var integer
     *
     * @ORM\Column(name="pos", type="integer", nullable=true)
     */
    private $pos = '11';


}

