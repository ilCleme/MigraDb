<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCatLink
 *
 * @ORM\Table(name="tbl_cat_link")
 * @ORM\Entity
 */
class TblCatLink
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_cat_link", type="integer", nullable=false)
     */
    private $idTblCatLink;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=false)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome = 'nome categoria';

    /**
     * @var string
     *
     * @ORM\Column(name="smarty_template", type="string", length=200, nullable=false)
     */
    private $smartyTemplate = 'link.tpl';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '11';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

