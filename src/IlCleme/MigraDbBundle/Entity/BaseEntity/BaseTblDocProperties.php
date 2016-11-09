<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblDocProperties
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
     * @ORM\Column(name="id_tbl_doc_properties", type="integer", nullable=false)
     */
    private $idTblDocProperties = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=false)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="property", type="string", length=255, nullable=false)
     */
    private $property = '';

    /**
     * @var array
     *
     * @ORM\Column(name="type_property", type="simple_array", nullable=false)
     */
    private $typeProperty = 'insieme di valori a selezione singola';

    /**
     * @var boolean
     *
     * @ORM\Column(name="compulsory", type="boolean", nullable=false)
     */
    private $compulsory = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_padre", type="integer", nullable=true)
     */
    private $idPadre;

    /**
     * @var array
     *
     * @ORM\Column(name="type_use", type="simple_array", nullable=false)
     */
    private $typeUse = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="pos", type="integer", nullable=true)
     */
    private $pos;

    /**
     * @var array
     *
     * @ORM\Column(name="admin_type_order", type="simple_array", nullable=false)
     */
    private $adminTypeOrder = 'per posizione';

    /**
     * @var integer
     *
     * @ORM\Column(name="visible", type="integer", nullable=false)
     */
    private $visible = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="compulsory_web", type="integer", nullable=true)
     */
    private $compulsoryWeb;

    /**
     * @var array
     *
     * @ORM\Column(name="type_property_web", type="simple_array", nullable=true)
     */
    private $typePropertyWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_associated", type="string", length=255, nullable=false)
     */
    private $tagAssociated = '';

    /**
     * @var array
     *
     * @ORM\Column(name="web_type_order", type="simple_array", nullable=false)
     */
    private $webTypeOrder = 'per posizione';



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
     * Set idTblDocProperties
     *
     * @param integer $idTblDocProperties
     *
     * @return BaseTblDocProperties
     */
    public function setIdTblDocProperties($idTblDocProperties)
    {
        $this->idTblDocProperties = $idTblDocProperties;

        return $this;
    }

    /**
     * Get idTblDocProperties
     *
     * @return integer
     */
    public function getIdTblDocProperties()
    {
        return $this->idTblDocProperties;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblDocProperties
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
     * Set property
     *
     * @param string $property
     *
     * @return BaseTblDocProperties
     */
    public function setProperty($property)
    {
        $this->property = $property;

        return $this;
    }

    /**
     * Get property
     *
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Set typeProperty
     *
     * @param array $typeProperty
     *
     * @return BaseTblDocProperties
     */
    public function setTypeProperty($typeProperty)
    {
        $this->typeProperty = $typeProperty;

        return $this;
    }

    /**
     * Get typeProperty
     *
     * @return array
     */
    public function getTypeProperty()
    {
        return $this->typeProperty;
    }

    /**
     * Set compulsory
     *
     * @param boolean $compulsory
     *
     * @return BaseTblDocProperties
     */
    public function setCompulsory($compulsory)
    {
        $this->compulsory = $compulsory;

        return $this;
    }

    /**
     * Get compulsory
     *
     * @return boolean
     */
    public function getCompulsory()
    {
        return $this->compulsory;
    }

    /**
     * Set idPadre
     *
     * @param integer $idPadre
     *
     * @return BaseTblDocProperties
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
     * Set typeUse
     *
     * @param array $typeUse
     *
     * @return BaseTblDocProperties
     */
    public function setTypeUse($typeUse)
    {
        $this->typeUse = $typeUse;

        return $this;
    }

    /**
     * Get typeUse
     *
     * @return array
     */
    public function getTypeUse()
    {
        return $this->typeUse;
    }

    /**
     * Set pos
     *
     * @param integer $pos
     *
     * @return BaseTblDocProperties
     */
    public function setPos($pos)
    {
        $this->pos = $pos;

        return $this;
    }

    /**
     * Get pos
     *
     * @return integer
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Set adminTypeOrder
     *
     * @param array $adminTypeOrder
     *
     * @return BaseTblDocProperties
     */
    public function setAdminTypeOrder($adminTypeOrder)
    {
        $this->adminTypeOrder = $adminTypeOrder;

        return $this;
    }

    /**
     * Get adminTypeOrder
     *
     * @return array
     */
    public function getAdminTypeOrder()
    {
        return $this->adminTypeOrder;
    }

    /**
     * Set visible
     *
     * @param integer $visible
     *
     * @return BaseTblDocProperties
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
     * Set compulsoryWeb
     *
     * @param integer $compulsoryWeb
     *
     * @return BaseTblDocProperties
     */
    public function setCompulsoryWeb($compulsoryWeb)
    {
        $this->compulsoryWeb = $compulsoryWeb;

        return $this;
    }

    /**
     * Get compulsoryWeb
     *
     * @return integer
     */
    public function getCompulsoryWeb()
    {
        return $this->compulsoryWeb;
    }

    /**
     * Set typePropertyWeb
     *
     * @param array $typePropertyWeb
     *
     * @return BaseTblDocProperties
     */
    public function setTypePropertyWeb($typePropertyWeb)
    {
        $this->typePropertyWeb = $typePropertyWeb;

        return $this;
    }

    /**
     * Get typePropertyWeb
     *
     * @return array
     */
    public function getTypePropertyWeb()
    {
        return $this->typePropertyWeb;
    }

    /**
     * Set tagAssociated
     *
     * @param string $tagAssociated
     *
     * @return BaseTblDocProperties
     */
    public function setTagAssociated($tagAssociated)
    {
        $this->tagAssociated = $tagAssociated;

        return $this;
    }

    /**
     * Get tagAssociated
     *
     * @return string
     */
    public function getTagAssociated()
    {
        return $this->tagAssociated;
    }

    /**
     * Set webTypeOrder
     *
     * @param array $webTypeOrder
     *
     * @return BaseTblDocProperties
     */
    public function setWebTypeOrder($webTypeOrder)
    {
        $this->webTypeOrder = $webTypeOrder;

        return $this;
    }

    /**
     * Get webTypeOrder
     *
     * @return array
     */
    public function getWebTypeOrder()
    {
        return $this->webTypeOrder;
    }
}
