<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblComunicatistampaSetup
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_tbl_comunicatistampa_setup", type="boolean", nullable=true)
     */
    private $idTblComunicatistampaSetup;

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
    private $templateListPreview = 'comunicatistampa_preview.tpl';

    /**
     * @var string
     *
     * @ORM\Column(name="template_list", type="string", length=255, nullable=false)
     */
    private $templateList = 'comunicatistampa_paginato.tpl';

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=255, nullable=false)
     */
    private $template = 'comunicato.tpl';

    /**
     * @var string
     *
     * @ORM\Column(name="template_search", type="string", length=255, nullable=false)
     */
    private $templateSearch = 'comunicatistampa_ricerca.tpl';

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
     * Get id
     *
     * @return boolean
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTblComunicatistampaSetup
     *
     * @param boolean $idTblComunicatistampaSetup
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setIdTblComunicatistampaSetup($idTblComunicatistampaSetup)
    {
        $this->idTblComunicatistampaSetup = $idTblComunicatistampaSetup;

        return $this;
    }

    /**
     * Get idTblComunicatistampaSetup
     *
     * @return boolean
     */
    public function getIdTblComunicatistampaSetup()
    {
        return $this->idTblComunicatistampaSetup;
    }

    /**
     * Set idTblLingua
     *
     * @param boolean $idTblLingua
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setIdTblLingua($idTblLingua)
    {
        $this->idTblLingua = $idTblLingua;

        return $this;
    }

    /**
     * Get idTblLingua
     *
     * @return boolean
     */
    public function getIdTblLingua()
    {
        return $this->idTblLingua;
    }

    /**
     * Set nDays
     *
     * @param integer $nDays
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setNDays($nDays)
    {
        $this->nDays = $nDays;

        return $this;
    }

    /**
     * Get nDays
     *
     * @return integer
     */
    public function getNDays()
    {
        return $this->nDays;
    }

    /**
     * Set nVisiblePreview
     *
     * @param boolean $nVisiblePreview
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setNVisiblePreview($nVisiblePreview)
    {
        $this->nVisiblePreview = $nVisiblePreview;

        return $this;
    }

    /**
     * Get nVisiblePreview
     *
     * @return boolean
     */
    public function getNVisiblePreview()
    {
        return $this->nVisiblePreview;
    }

    /**
     * Set nItemXPageActive
     *
     * @param integer $nItemXPageActive
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setNItemXPageActive($nItemXPageActive)
    {
        $this->nItemXPageActive = $nItemXPageActive;

        return $this;
    }

    /**
     * Get nItemXPageActive
     *
     * @return integer
     */
    public function getNItemXPageActive()
    {
        return $this->nItemXPageActive;
    }

    /**
     * Set nItemXPageArchive
     *
     * @param integer $nItemXPageArchive
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setNItemXPageArchive($nItemXPageArchive)
    {
        $this->nItemXPageArchive = $nItemXPageArchive;

        return $this;
    }

    /**
     * Get nItemXPageArchive
     *
     * @return integer
     */
    public function getNItemXPageArchive()
    {
        return $this->nItemXPageArchive;
    }

    /**
     * Set nItemXPageSearch
     *
     * @param integer $nItemXPageSearch
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setNItemXPageSearch($nItemXPageSearch)
    {
        $this->nItemXPageSearch = $nItemXPageSearch;

        return $this;
    }

    /**
     * Get nItemXPageSearch
     *
     * @return integer
     */
    public function getNItemXPageSearch()
    {
        return $this->nItemXPageSearch;
    }

    /**
     * Set maxNPage
     *
     * @param integer $maxNPage
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setMaxNPage($maxNPage)
    {
        $this->maxNPage = $maxNPage;

        return $this;
    }

    /**
     * Get maxNPage
     *
     * @return integer
     */
    public function getMaxNPage()
    {
        return $this->maxNPage;
    }

    /**
     * Set templateListPreview
     *
     * @param string $templateListPreview
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setTemplateListPreview($templateListPreview)
    {
        $this->templateListPreview = $templateListPreview;

        return $this;
    }

    /**
     * Get templateListPreview
     *
     * @return string
     */
    public function getTemplateListPreview()
    {
        return $this->templateListPreview;
    }

    /**
     * Set templateList
     *
     * @param string $templateList
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setTemplateList($templateList)
    {
        $this->templateList = $templateList;

        return $this;
    }

    /**
     * Get templateList
     *
     * @return string
     */
    public function getTemplateList()
    {
        return $this->templateList;
    }

    /**
     * Set template
     *
     * @param string $template
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set templateSearch
     *
     * @param string $templateSearch
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setTemplateSearch($templateSearch)
    {
        $this->templateSearch = $templateSearch;

        return $this;
    }

    /**
     * Get templateSearch
     *
     * @return string
     */
    public function getTemplateSearch()
    {
        return $this->templateSearch;
    }

    /**
     * Set setlocale
     *
     * @param string $setlocale
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setSetlocale($setlocale)
    {
        $this->setlocale = $setlocale;

        return $this;
    }

    /**
     * Get setlocale
     *
     * @return string
     */
    public function getSetlocale()
    {
        return $this->setlocale;
    }

    /**
     * Set formatDateList
     *
     * @param string $formatDateList
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setFormatDateList($formatDateList)
    {
        $this->formatDateList = $formatDateList;

        return $this;
    }

    /**
     * Get formatDateList
     *
     * @return string
     */
    public function getFormatDateList()
    {
        return $this->formatDateList;
    }

    /**
     * Set formatDatePage
     *
     * @param string $formatDatePage
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setFormatDatePage($formatDatePage)
    {
        $this->formatDatePage = $formatDatePage;

        return $this;
    }

    /**
     * Get formatDatePage
     *
     * @return string
     */
    public function getFormatDatePage()
    {
        return $this->formatDatePage;
    }

    /**
     * Set formatDatePreview
     *
     * @param string $formatDatePreview
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setFormatDatePreview($formatDatePreview)
    {
        $this->formatDatePreview = $formatDatePreview;

        return $this;
    }

    /**
     * Get formatDatePreview
     *
     * @return string
     */
    public function getFormatDatePreview()
    {
        return $this->formatDatePreview;
    }

    /**
     * Set pageListActive
     *
     * @param string $pageListActive
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setPageListActive($pageListActive)
    {
        $this->pageListActive = $pageListActive;

        return $this;
    }

    /**
     * Get pageListActive
     *
     * @return string
     */
    public function getPageListActive()
    {
        return $this->pageListActive;
    }

    /**
     * Set pageViewActive
     *
     * @param string $pageViewActive
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setPageViewActive($pageViewActive)
    {
        $this->pageViewActive = $pageViewActive;

        return $this;
    }

    /**
     * Get pageViewActive
     *
     * @return string
     */
    public function getPageViewActive()
    {
        return $this->pageViewActive;
    }

    /**
     * Set pageListArchive
     *
     * @param string $pageListArchive
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setPageListArchive($pageListArchive)
    {
        $this->pageListArchive = $pageListArchive;

        return $this;
    }

    /**
     * Get pageListArchive
     *
     * @return string
     */
    public function getPageListArchive()
    {
        return $this->pageListArchive;
    }

    /**
     * Set pageViewArchive
     *
     * @param string $pageViewArchive
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setPageViewArchive($pageViewArchive)
    {
        $this->pageViewArchive = $pageViewArchive;

        return $this;
    }

    /**
     * Get pageViewArchive
     *
     * @return string
     */
    public function getPageViewArchive()
    {
        return $this->pageViewArchive;
    }

    /**
     * Set pageSearch
     *
     * @param string $pageSearch
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setPageSearch($pageSearch)
    {
        $this->pageSearch = $pageSearch;

        return $this;
    }

    /**
     * Get pageSearch
     *
     * @return string
     */
    public function getPageSearch()
    {
        return $this->pageSearch;
    }

    /**
     * Set pageSearchList
     *
     * @param string $pageSearchList
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setPageSearchList($pageSearchList)
    {
        $this->pageSearchList = $pageSearchList;

        return $this;
    }

    /**
     * Get pageSearchList
     *
     * @return string
     */
    public function getPageSearchList()
    {
        return $this->pageSearchList;
    }

    /**
     * Set pageSearchView
     *
     * @param string $pageSearchView
     *
     * @return BaseTblComunicatistampaSetup
     */
    public function setPageSearchView($pageSearchView)
    {
        $this->pageSearchView = $pageSearchView;

        return $this;
    }

    /**
     * Get pageSearchView
     *
     * @return string
     */
    public function getPageSearchView()
    {
        return $this->pageSearchView;
    }
}
