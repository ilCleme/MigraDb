<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblNotizieCat
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
     * @ORM\Column(name="id_tbl_notizie_cat", type="integer", nullable=true)
     */
    private $idTblNotizieCat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome = 'nome tradotto';

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=true)
     */
    private $img;

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
     * Set idTblNotizieCat
     *
     * @param integer $idTblNotizieCat
     *
     * @return BaseTblNotizieCat
     */
    public function setIdTblNotizieCat($idTblNotizieCat)
    {
        $this->idTblNotizieCat = $idTblNotizieCat;

        return $this;
    }

    /**
     * Get idTblNotizieCat
     *
     * @return integer
     */
    public function getIdTblNotizieCat()
    {
        return $this->idTblNotizieCat;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * Set img
     *
     * @param string $img
     *
     * @return BaseTblNotizieCat
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set posizione
     *
     * @param integer $posizione
     *
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * Set nVisiblePreview
     *
     * @param boolean $nVisiblePreview
     *
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
     * @return BaseTblNotizieCat
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
