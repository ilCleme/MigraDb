<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAree
 *
 * @ORM\Table(name="tbl_aree")
 * @ORM\Entity
 */
class TblAree
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_aree", type="integer", nullable=false)
     */
    private $idTblAree;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    private $idTblLingua;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_menu", type="integer", nullable=true)
     */
    private $idTblMenu;

    /**
     * @var string
     *
     * @ORM\Column(name="smarty_template", type="string", length=100, nullable=true)
     */
    private $smartyTemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="accesskey", type="string", length=2, nullable=true)
     */
    private $accesskey;

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_tbl_gruppi", type="string", length=200, nullable=true)
     */
    private $checkboxTblGruppi;

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_tbl_service", type="string", length=200, nullable=true)
     */
    private $checkboxTblService;

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_tbl_banner", type="string", length=200, nullable=true)
     */
    private $checkboxTblBanner;

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione;

    /**
     * @var string
     *
     * @ORM\Column(name="template_home", type="string", length=100, nullable=true)
     */
    private $templateHome;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=100, nullable=true)
     */
    private $img;

    /**
     * @var integer
     *
     * @ORM\Column(name="visible", type="integer", nullable=true)
     */
    private $visible;

    /**
     * @var string
     *
     * @ORM\Column(name="img1", type="string", length=200, nullable=true)
     */
    private $img1;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

