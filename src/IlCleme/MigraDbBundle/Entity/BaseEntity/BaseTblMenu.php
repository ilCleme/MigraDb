<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblMenu
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
     * @return BaseTblMenu
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
     * @return BaseTblMenu
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
     * Set idTblMenu
     *
     * @param integer $idTblMenu
     *
     * @return BaseTblMenu
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
     * Set pub
     *
     * @param boolean $pub
     *
     * @return BaseTblMenu
     */
    public function setPub($pub)
    {
        $this->pub = $pub;

        return $this;
    }

    /**
     * Get pub
     *
     * @return boolean
     */
    public function getPub()
    {
        return $this->pub;
    }

    /**
     * Set idPadre
     *
     * @param integer $idPadre
     *
     * @return BaseTblMenu
     */
    public function setIdPadre($idPadre)
    {
        $this->idPadre = $idPadre;

        return $this;
    }

    /**
     * Get idPadre
     *
     * @return integer
     */
    public function getIdPadre()
    {
        return $this->idPadre;
    }

    /**
     * Set checkboxIntention
     *
     * @param string $checkboxIntention
     *
     * @return BaseTblMenu
     */
    public function setCheckboxIntention($checkboxIntention)
    {
        $this->checkboxIntention = $checkboxIntention;

        return $this;
    }

    /**
     * Get checkboxIntention
     *
     * @return string
     */
    public function getCheckboxIntention()
    {
        return $this->checkboxIntention;
    }

    /**
     * Set posizione
     *
     * @param integer $posizione
     *
     * @return BaseTblMenu
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
     * Set checkboxTblGruppi
     *
     * @param string $checkboxTblGruppi
     *
     * @return BaseTblMenu
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
     * @return BaseTblMenu
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
     * Set img
     *
     * @param string $img
     *
     * @return BaseTblMenu
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
     * Set extraLink
     *
     * @param string $extraLink
     *
     * @return BaseTblMenu
     */
    public function setExtraLink($extraLink)
    {
        $this->extraLink = $extraLink;

        return $this;
    }

    /**
     * Get extraLink
     *
     * @return string
     */
    public function getExtraLink()
    {
        return $this->extraLink;
    }

    /**
     * Set tipoMenu
     *
     * @param string $tipoMenu
     *
     * @return BaseTblMenu
     */
    public function setTipoMenu($tipoMenu)
    {
        $this->tipoMenu = $tipoMenu;

        return $this;
    }

    /**
     * Get tipoMenu
     *
     * @return string
     */
    public function getTipoMenu()
    {
        return $this->tipoMenu;
    }

    /**
     * Set img2
     *
     * @param string $img2
     *
     * @return BaseTblMenu
     */
    public function setImg2($img2)
    {
        $this->img2 = $img2;

        return $this;
    }

    /**
     * Get img2
     *
     * @return string
     */
    public function getImg2()
    {
        return $this->img2;
    }

    /**
     * Set img1
     *
     * @param string $img1
     *
     * @return BaseTblMenu
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
     * Set link
     *
     * @param string $link
     *
     * @return BaseTblMenu
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set idTblPhotoCat
     *
     * @param integer $idTblPhotoCat
     *
     * @return BaseTblMenu
     */
    public function setIdTblPhotoCat($idTblPhotoCat)
    {
        $this->idTblPhotoCat = $idTblPhotoCat;

        return $this;
    }

    /**
     * Get idTblPhotoCat
     *
     * @return integer
     */
    public function getIdTblPhotoCat()
    {
        return $this->idTblPhotoCat;
    }
}
