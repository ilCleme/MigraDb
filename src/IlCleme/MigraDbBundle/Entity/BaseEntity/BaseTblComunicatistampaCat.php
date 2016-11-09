<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblComunicatistampaCat
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
     * @ORM\Column(name="id_tbl_comunicatistampa_cat", type="integer", nullable=true)
     */
    private $idTblComunicatistampaCat = '0';

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
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '11';

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTblComunicatistampaCat
     *
     * @param integer $idTblComunicatistampaCat
     *
     * @return BaseTblComunicatistampaCat
     */
    public function setIdTblComunicatistampaCat($idTblComunicatistampaCat)
    {
        $this->idTblComunicatistampaCat = $idTblComunicatistampaCat;

        return $this;
    }

    /**
     * Get idTblComunicatistampaCat
     *
     * @return integer
     */
    public function getIdTblComunicatistampaCat()
    {
        return $this->idTblComunicatistampaCat;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblComunicatistampaCat
     */
    public function setIdTblLingua($idTblLingua)
    {
        $this->idTblLingua = $idTblLingua;

        return $this;
    }

    /**
     * Get idTblLingua
     *
     * @return integer
     */
    public function getIdTblLingua()
    {
        return $this->idTblLingua;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return BaseTblComunicatistampaCat
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set posizione
     *
     * @param integer $posizione
     *
     * @return BaseTblComunicatistampaCat
     */
    public function setPosizione($posizione)
    {
        $this->posizione = $posizione;

        return $this;
    }

    /**
     * Get posizione
     *
     * @return integer
     */
    public function getPosizione()
    {
        return $this->posizione;
    }

    /**
     * Set templateListPreview
     *
     * @param string $templateListPreview
     *
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
     * Set nDays
     *
     * @param integer $nDays
     *
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
     * Set formatDateList
     *
     * @param string $formatDateList
     *
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
     * @return BaseTblComunicatistampaCat
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
