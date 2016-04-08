<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblLink
 *
 * @ORM\Table(name="tbl_link")
 * @ORM\Entity
 */
class TblLink
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_link", type="integer", nullable=false)
     */
    private $idTblLink;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=false)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=false)
     */
    private $nome = 'nome link';

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=150, nullable=false)
     */
    private $link = 'http://';

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=150, nullable=true)
     */
    private $img = '.gif';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_cat_link", type="integer", nullable=false)
     */
    private $idTblCatLink = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_target", type="integer", nullable=true)
     */
    private $idTblTarget = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

