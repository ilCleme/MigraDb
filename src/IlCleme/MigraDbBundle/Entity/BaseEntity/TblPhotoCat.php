<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPhotoCat
 *
 * @ORM\Table(name="tbl_photo_cat")
 * @ORM\Entity
 */
class TblPhotoCat
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
     * @ORM\Column(name="id_padre", type="integer", nullable=true)
     */
    private $idPadre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_photo_cat", type="integer", nullable=true)
     */
    private $idTblPhotoCat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome = 'nome tradotto';

    /**
     * @var integer
     *
     * @ORM\Column(name="num", type="integer", nullable=true)
     */
    private $num = '5';

    /**
     * @var string
     *
     * @ORM\Column(name="smarty_template", type="string", length=200, nullable=true)
     */
    private $smartyTemplate = 'album.tpl';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '0';


}

