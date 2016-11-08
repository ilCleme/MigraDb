<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblMenu
 *
 * @ORM\Table(name="tbl_menu")
 * @ORM\Entity
 */
class TblMenu
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
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    private $idTblLingua = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome = 'nome';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_menu", type="integer", nullable=true)
     */
    private $idTblMenu = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pub", type="boolean", nullable=true)
     */
    private $pub = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_padre", type="integer", nullable=true)
     */
    private $idPadre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_intention", type="string", length=100, nullable=true)
     */
    private $checkboxIntention = '1,2,3,4,5,6';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_tbl_gruppi", type="string", length=200, nullable=true)
     */
    private $checkboxTblGruppi = ',,';

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_tbl_service", type="string", length=200, nullable=true)
     */
    private $checkboxTblService = ',,';

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=100, nullable=true)
     */
    private $img = '.gif';

    /**
     * @var string
     *
     * @ORM\Column(name="extra_link", type="string", length=200, nullable=true)
     */
    private $extraLink;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_menu", type="string", length=100, nullable=true)
     */
    private $tipoMenu;

    /**
     * @var string
     *
     * @ORM\Column(name="img2", type="string", length=200, nullable=true)
     */
    private $img2;

    /**
     * @var string
     *
     * @ORM\Column(name="img1", type="string", length=200, nullable=true)
     */
    private $img1;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=150, nullable=true)
     */
    private $link;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_photo_cat", type="integer", nullable=true)
     */
    private $idTblPhotoCat;


}

