<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblDocPropertyValues
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
     * @ORM\Column(name="id_tbl_doc_property_values", type="integer", nullable=false)
     */
    private $idTblDocPropertyValues = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=false)
     */
    private $idTblLingua = '4';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_doc_properties", type="integer", nullable=false)
     */
    private $idTblDocProperties = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="property_value", type="string", length=255, nullable=false)
     */
    private $propertyValue = '';

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
    private $pos = '0';

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
    private $tagAssociated = '';



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
     * Set idTblDocPropertyValues
     *
     * @param integer $idTblDocPropertyValues
     *
     * @return BaseTblDocPropertyValues
     */
    public function setIdTblDocPropertyValues($idTblDocPropertyValues)
    {
        $this->idTblDocPropertyValues = $idTblDocPropertyValues;

        return $this;
    }

    /**
     * Get idTblDocPropertyValues
     *
     * @return integer
     */
    public function getIdTblDocPropertyValues()
    {
        return $this->idTblDocPropertyValues;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblDocPropertyValues
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
     * Set idTblDocProperties
     *
     * @param integer $idTblDocProperties
     *
     * @return BaseTblDocPropertyValues
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
     * Set propertyValue
     *
     * @param string $propertyValue
     *
     * @return BaseTblDocPropertyValues
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
     * @return BaseTblDocPropertyValues
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
     * @return BaseTblDocPropertyValues
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
     * @return BaseTblDocPropertyValues
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
     * @return BaseTblDocPropertyValues
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
