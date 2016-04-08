<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNotizieSetup
 *
 * @ORM\Table(name="tbl_notizie_setup")
 * @ORM\Entity
 */
class TblNotizieSetup
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="id_tbl_notizie_setup", type="boolean", nullable=true)
     */
    private $idTblNotizieSetup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_tbl_lingua", type="boolean", nullable=false)
     */
    private $idTblLingua = '4';

    /**
     * @var integer
     *
     * @ORM\Column(name="n_days", type="smallint", nullable=false)
     */
    private $nDays = '30';

    /**
     * @var boolean
     *
     * @ORM\Column(name="n_visible_preview", type="boolean", nullable=false)
     */
    private $nVisiblePreview = '5';

    /**
     * @var integer
     *
     * @ORM\Column(name="n_item_x_page_active", type="smallint", nullable=false)
     */
    private $nItemXPageActive = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="n_item_x_page_archive", type="smallint", nullable=false)
     */
    private $nItemXPageArchive = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="n_item_x_page_search", type="smallint", nullable=false)
     */
    private $nItemXPageSearch = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="max_n_page", type="smallint", nullable=false)
     */
    private $maxNPage = '10';

    /**
     * @var string
     *
     * @ORM\Column(name="template_list_preview", type="string", length=255, nullable=false)
     */
    private $templateListPreview = 'notizie_preview.tpl';

    /**
     * @var string
     *
     * @ORM\Column(name="template_list", type="string", length=255, nullable=false)
     */
    private $templateList = 'notizie_paginato.tpl';

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=255, nullable=false)
     */
    private $template = 'notizie.tpl';

    /**
     * @var string
     *
     * @ORM\Column(name="template_search", type="string", length=255, nullable=false)
     */
    private $templateSearch = 'notizie_ricerca.tpl';

    /**
     * @var string
     *
     * @ORM\Column(name="setlocale", type="string", length=255, nullable=false)
     */
    private $setlocale = 'it_IT';

    /**
     * @var string
     *
     * @ORM\Column(name="format_date_list", type="string", length=255, nullable=false)
     */
    private $formatDateList = '%d %B %Y';

    /**
     * @var string
     *
     * @ORM\Column(name="format_date_page", type="string", length=255, nullable=false)
     */
    private $formatDatePage = '%d %B %Y';

    /**
     * @var string
     *
     * @ORM\Column(name="format_date_preview", type="string", length=255, nullable=false)
     */
    private $formatDatePreview = '%d %B %Y';

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
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

