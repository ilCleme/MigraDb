<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblPagePropertyValues
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
     * @ORM\Column(name="id_tbl_page_property_values", type="integer", nullable=false)
     */
    private $idTblPagePropertyValues;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=false)
     */
    private $idTblLingua = '4';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_page_properties", type="integer", nullable=false)
     */
    private $idTblPageProperties;

    /**
     * @var string
     *
     * @ORM\Column(name="property_value", type="string", length=255, nullable=false)
     */
    private $propertyValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_padre", type="integer", nullable=true)
     */
    private $idPadre;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos", type="integer", nullable=false)
     */
    private $pos;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_menu", type="integer", nullable=true)
     */
    private $idTblMenu;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_associated", type="string", length=255, nullable=false)
     */
    private $tagAssociated;



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
     * Set idTblPagePropertyValues
     *
     * @param integer $idTblPagePropertyValues
     *
     * @return BaseTblPagePropertyValues
     */
    public function setIdTblPagePropertyValues($idTblPagePropertyValues)
    {
        $this->idTblPagePropertyValues = $idTblPagePropertyValues;

        return $this;
    }

    /**
     * Get idTblPagePropertyValues
     *
     * @return integer
     */
    public function getIdTblPagePropertyValues()
    {
        return $this->idTblPagePropertyValues;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblPagePropertyValues
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
     * Set idTblPageProperties
     *
     * @param integer $idTblPageProperties
     *
     * @return BaseTblPagePropertyValues
     */
    public function setIdTblPageProperties($idTblPageProperties)
    {
        $this->idTblPageProperties = $idTblPageProperties;

        return $this;
    }

    /**
     * Get idTblPageProperties
     *
     * @return integer
     */
    public function getIdTblPageProperties()
    {
        return $this->idTblPageProperties;
    }

    /**
     * Set propertyValue
     *
     * @param string $propertyValue
     *
     * @return BaseTblPagePropertyValues
     */
    public function setPropertyValue($propertyValue)
    {
        $this->propertyValue = $propertyValue;

        return $this;
    }

    /**
     * Get propertyValue
     *
     * @return string
     */
    public function getPropertyValue()
    {
        return $this->propertyValue;
    }

    /**
     * Set idPadre
     *
     * @param integer $idPadre
     *
     * @return BaseTblPagePropertyValues
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
     * Set pos
     *
     * @param integer $pos
     *
     * @return BaseTblPagePropertyValues
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
     * Set idTblMenu
     *
     * @param integer $idTblMenu
     *
     * @return BaseTblPagePropertyValues
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
     * Set tagAssociated
     *
     * @param string $tagAssociated
     *
     * @return BaseTblPagePropertyValues
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
}
