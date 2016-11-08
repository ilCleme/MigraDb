<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblMetatag
 *
 * @ORM\Table(name="tbl_metatag")
 * @ORM\Entity
 */
class TblMetatag
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
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=false)
     */
    private $idTblLingua;

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_tbl_service", type="string", length=200, nullable=true)
     */
    private $checkboxTblService = ',,';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_menu", type="integer", nullable=true)
     */
    private $idTblMenu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="set_submenu", type="boolean", nullable=true)
     */
    private $setSubmenu;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_title", type="string", length=255, nullable=true)
     */
    private $metaTagTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_charset", type="string", length=30, nullable=true)
     */
    private $metaTagCharset;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_generator", type="string", length=255, nullable=true)
     */
    private $metaTagGenerator;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_author", type="string", length=255, nullable=true)
     */
    private $metaTagAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_description", type="string", length=255, nullable=true)
     */
    private $metaTagDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_keywords", type="string", length=255, nullable=true)
     */
    private $metaTagKeywords;



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
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return TblMetatag
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
     * Set checkboxTblService
     *
     * @param string $checkboxTblService
     *
     * @return TblMetatag
     */
    public function setCheckboxTblService($checkboxTblService)
    {
        $this->checkboxTblService = $checkboxTblService;

        return $this;
    }

    /**
     * Get checkboxTblService
     *
     * @return string
     */
    public function getCheckboxTblService()
    {
        return $this->checkboxTblService;
    }

    /**
     * Set idTblMenu
     *
     * @param integer $idTblMenu
     *
     * @return TblMetatag
     */
    public function setIdTblMenu($idTblMenu)
    {
        $this->idTblMenu = $idTblMenu;

        return $this;
    }

    /**
     * Get idTblMenu
     *
     * @return integer
     */
    public function getIdTblMenu()
    {
        return $this->idTblMenu;
    }

    /**
     * Set setSubmenu
     *
     * @param boolean $setSubmenu
     *
     * @return TblMetatag
     */
    public function setSetSubmenu($setSubmenu)
    {
        $this->setSubmenu = $setSubmenu;

        return $this;
    }

    /**
     * Get setSubmenu
     *
     * @return boolean
     */
    public function getSetSubmenu()
    {
        return $this->setSubmenu;
    }

    /**
     * Set metaTagTitle
     *
     * @param string $metaTagTitle
     *
     * @return TblMetatag
     */
    public function setMetaTagTitle($metaTagTitle)
    {
        $this->metaTagTitle = $metaTagTitle;

        return $this;
    }

    /**
     * Get metaTagTitle
     *
     * @return string
     */
    public function getMetaTagTitle()
    {
        return $this->metaTagTitle;
    }

    /**
     * Set metaTagCharset
     *
     * @param string $metaTagCharset
     *
     * @return TblMetatag
     */
    public function setMetaTagCharset($metaTagCharset)
    {
        $this->metaTagCharset = $metaTagCharset;

        return $this;
    }

    /**
     * Get metaTagCharset
     *
     * @return string
     */
    public function getMetaTagCharset()
    {
        return $this->metaTagCharset;
    }

    /**
     * Set metaTagGenerator
     *
     * @param string $metaTagGenerator
     *
     * @return TblMetatag
     */
    public function setMetaTagGenerator($metaTagGenerator)
    {
        $this->metaTagGenerator = $metaTagGenerator;

        return $this;
    }

    /**
     * Get metaTagGenerator
     *
     * @return string
     */
    public function getMetaTagGenerator()
    {
        return $this->metaTagGenerator;
    }

    /**
     * Set metaTagAuthor
     *
     * @param string $metaTagAuthor
     *
     * @return TblMetatag
     */
    public function setMetaTagAuthor($metaTagAuthor)
    {
        $this->metaTagAuthor = $metaTagAuthor;

        return $this;
    }

    /**
     * Get metaTagAuthor
     *
     * @return string
     */
    public function getMetaTagAuthor()
    {
        return $this->metaTagAuthor;
    }

    /**
     * Set metaTagDescription
     *
     * @param string $metaTagDescription
     *
     * @return TblMetatag
     */
    public function setMetaTagDescription($metaTagDescription)
    {
        $this->metaTagDescription = $metaTagDescription;

        return $this;
    }

    /**
     * Get metaTagDescription
     *
     * @return string
     */
    public function getMetaTagDescription()
    {
        return $this->metaTagDescription;
    }

    /**
     * Set metaTagKeywords
     *
     * @param string $metaTagKeywords
     *
     * @return TblMetatag
     */
    public function setMetaTagKeywords($metaTagKeywords)
    {
        $this->metaTagKeywords = $metaTagKeywords;

        return $this;
    }

    /**
     * Get metaTagKeywords
     *
     * @return string
     */
    public function getMetaTagKeywords()
    {
        return $this->metaTagKeywords;
    }
}
