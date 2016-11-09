<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblAree
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
     * @ORM\Column(name="id_tbl_aree", type="integer", nullable=false)
     */
    private $idTblAree = '0';

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
     * @var string
     *
     * @ORM\Column(name="sottotitolo", type="string", length=255, nullable=true)
     */
    private $sottotitolo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_menu", type="integer", nullable=true)
     */
    private $idTblMenu = '1';

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
     * @ORM\Column(name="checkbox_tbl_banner", type="string", length=200, nullable=true)
     */
    private $checkboxTblBanner;

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="template_home", type="string", length=100, nullable=true)
     */
    private $templateHome;

    /**
     * @var string
     *
     * @ORM\Column(name="icona", type="string", length=255, nullable=true)
     */
    private $icona;

    /**
     * @var integer
     *
     * @ORM\Column(name="altezza", type="integer", nullable=true)
     */
    private $altezza;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=100, nullable=true)
     */
    private $img = '.gif';

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
     * @var string
     *
     * @ORM\Column(name="pos_rel", type="string", length=10, nullable=true)
     */
    private $posRel;



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
     * Set idTblAree
     *
     * @param integer $idTblAree
     *
     * @return BaseTblAree
     */
    public function setIdTblAree($idTblAree)
    {
        $this->idTblAree = $idTblAree;

        return $this;
    }

    /**
     * Get idTblAree
     *
     * @return integer
     */
    public function getIdTblAree()
    {
        return $this->idTblAree;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblAree
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
     * @return BaseTblAree
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
     * Set sottotitolo
     *
     * @param string $sottotitolo
     *
     * @return BaseTblAree
     */
    public function setSottotitolo($sottotitolo)
    {
        $this->sottotitolo = $sottotitolo;

        return $this;
    }

    /**
     * Get sottotitolo
     *
     * @return string
     */
    public function getSottotitolo()
    {
        return $this->sottotitolo;
    }

    /**
     * Set idTblMenu
     *
     * @param integer $idTblMenu
     *
     * @return BaseTblAree
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
     * Set smartyTemplate
     *
     * @param string $smartyTemplate
     *
     * @return BaseTblAree
     */
    public function setSmartyTemplate($smartyTemplate)
    {
        $this->smartyTemplate = $smartyTemplate;

        return $this;
    }

    /**
     * Get smartyTemplate
     *
     * @return string
     */
    public function getSmartyTemplate()
    {
        return $this->smartyTemplate;
    }

    /**
     * Set accesskey
     *
     * @param string $accesskey
     *
     * @return BaseTblAree
     */
    public function setAccesskey($accesskey)
    {
        $this->accesskey = $accesskey;

        return $this;
    }

    /**
     * Get accesskey
     *
     * @return string
     */
    public function getAccesskey()
    {
        return $this->accesskey;
    }

    /**
     * Set checkboxTblGruppi
     *
     * @param string $checkboxTblGruppi
     *
     * @return BaseTblAree
     */
    public function setCheckboxTblGruppi($checkboxTblGruppi)
    {
        $this->checkboxTblGruppi = $checkboxTblGruppi;

        return $this;
    }

    /**
     * Get checkboxTblGruppi
     *
     * @return string
     */
    public function getCheckboxTblGruppi()
    {
        return $this->checkboxTblGruppi;
    }

    /**
     * Set checkboxTblService
     *
     * @param string $checkboxTblService
     *
     * @return BaseTblAree
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
     * Set checkboxTblBanner
     *
     * @param string $checkboxTblBanner
     *
     * @return BaseTblAree
     */
    public function setCheckboxTblBanner($checkboxTblBanner)
    {
        $this->checkboxTblBanner = $checkboxTblBanner;

        return $this;
    }

    /**
     * Get checkboxTblBanner
     *
     * @return string
     */
    public function getCheckboxTblBanner()
    {
        return $this->checkboxTblBanner;
    }

    /**
     * Set posizione
     *
     * @param integer $posizione
     *
     * @return BaseTblAree
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
     * Set templateHome
     *
     * @param string $templateHome
     *
     * @return BaseTblAree
     */
    public function setTemplateHome($templateHome)
    {
        $this->templateHome = $templateHome;

        return $this;
    }

    /**
     * Get templateHome
     *
     * @return string
     */
    public function getTemplateHome()
    {
        return $this->templateHome;
    }

    /**
     * Set icona
     *
     * @param string $icona
     *
     * @return BaseTblAree
     */
    public function setIcona($icona)
    {
        $this->icona = $icona;

        return $this;
    }

    /**
     * Get icona
     *
     * @return string
     */
    public function getIcona()
    {
        return $this->icona;
    }

    /**
     * Set altezza
     *
     * @param integer $altezza
     *
     * @return BaseTblAree
     */
    public function setAltezza($altezza)
    {
        $this->altezza = $altezza;

        return $this;
    }

    /**
     * Get altezza
     *
     * @return integer
     */
    public function getAltezza()
    {
        return $this->altezza;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return BaseTblAree
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
     * Set visible
     *
     * @param integer $visible
     *
     * @return BaseTblAree
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return integer
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set img1
     *
     * @param string $img1
     *
     * @return BaseTblAree
     */
    public function setImg1($img1)
    {
        $this->img1 = $img1;

        return $this;
    }

    /**
     * Get img1
     *
     * @return string
     */
    public function getImg1()
    {
        return $this->img1;
    }

    /**
     * Set posRel
     *
     * @param string $posRel
     *
     * @return BaseTblAree
     */
    public function setPosRel($posRel)
    {
        $this->posRel = $posRel;

        return $this;
    }

    /**
     * Get posRel
     *
     * @return string
     */
    public function getPosRel()
    {
        return $this->posRel;
    }
}
