<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblComunicatistampaCat
 *
 * @ORM\Table(name="tbl_comunicatistampa_cat")
 * @ORM\Entity
 */
class TblComunicatistampaCat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_comunicatistampa_cat", type="integer", nullable=true)
     */
    private $idTblComunicatistampaCat;

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
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione;

    /**
     * @var string
     *
     * @ORM\Column(name="template_list_preview", type="string", length=255, nullable=true)
     */
    private $templateListPreview;

    /**
     * @var string
     *
     * @ORM\Column(name="template_list", type="string", length=255, nullable=true)
     */
    private $templateList;

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=255, nullable=true)
     */
    private $template;

    /**
     * @var string
     *
     * @ORM\Column(name="template_search", type="string", length=255, nullable=true)
     */
    private $templateSearch;

    /**
     * @var integer
     *
     * @ORM\Column(name="n_days", type="smallint", nullable=true)
     */
    private $nDays;

    /**
     * @var boolean
     *
     * @ORM\Column(name="n_visible_preview", type="boolean", nullable=true)
     */
    private $nVisiblePreview;

    /**
     * @var integer
     *
     * @ORM\Column(name="n_item_x_page_active", type="smallint", nullable=true)
     */
    private $nItemXPageActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="n_item_x_page_archive", type="smallint", nullable=true)
     */
    private $nItemXPageArchive;

    /**
     * @var integer
     *
     * @ORM\Column(name="n_item_x_page_search", type="smallint", nullable=true)
     */
    private $nItemXPageSearch;

    /**
     * @var string
     *
     * @ORM\Column(name="format_date_list", type="string", length=255, nullable=true)
     */
    private $formatDateList;

    /**
     * @var string
     *
     * @ORM\Column(name="format_date_page", type="string", length=255, nullable=true)
     */
    private $formatDatePage;

    /**
     * @var string
     *
     * @ORM\Column(name="format_date_preview", type="string", length=255, nullable=true)
     */
    private $formatDatePreview;

    /**
     * @var string
     *
     * @ORM\Column(name="page_list_active", type="string", length=255, nullable=true)
     */
    private $pageListActive;

    /**
     * @var string
     *
     * @ORM\Column(name="page_view_active", type="string", length=255, nullable=true)
     */
    private $pageViewActive;

    /**
     * @var string
     *
     * @ORM\Column(name="page_list_archive", type="string", length=255, nullable=true)
     */
    private $pageListArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="page_view_archive", type="string", length=255, nullable=true)
     */
    private $pageViewArchive;

    /**
     * @var string
     *
     * @ORM\Column(name="page_search", type="string", length=255, nullable=true)
     */
    private $pageSearch;

    /**
     * @var string
     *
     * @ORM\Column(name="page_search_list", type="string", length=255, nullable=true)
     */
    private $pageSearchList;

    /**
     * @var string
     *
     * @ORM\Column(name="page_search_view", type="string", length=255, nullable=true)
     */
    private $pageSearchView;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

