<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblPageClassificator
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
    private $idTblLingua = '4';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_page", type="integer", nullable=false)
     */
    private $idTblPage;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_page_properties", type="integer", nullable=false)
     */
    private $idTblPageProperties;

    /**
     * @var string
     *
     * @ORM\Column(name="property_values_tbl_page", type="string", length=255, nullable=true)
     */
    private $propertyValuesTblPage;

    /**
     * @var integer
     *
     * @ORM\Column(name="property_value_reference", type="integer", nullable=false)
     */
    private $propertyValueReference = '0';



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
     * @return BaseTblPageClassificator
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
     * Set idTblPage
     *
     * @param integer $idTblPage
     *
     * @return BaseTblPageClassificator
     */
    public function setIdTblPage($idTblPage)
    {
        $this->idTblPage = $idTblPage;

        return $this;
    }

    /**
     * Get idTblPage
     *
     * @return integer
     */
    public function getIdTblPage()
    {
        return $this->idTblPage;
    }

    /**
     * Set idTblPageProperties
     *
     * @param integer $idTblPageProperties
     *
     * @return BaseTblPageClassificator
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
     * Set propertyValuesTblPage
     *
     * @param string $propertyValuesTblPage
     *
     * @return BaseTblPageClassificator
     */
    public function setPropertyValuesTblPage($propertyValuesTblPage)
    {
        $this->propertyValuesTblPage = $propertyValuesTblPage;

        return $this;
    }

    /**
     * Get propertyValuesTblPage
     *
     * @return string
     */
    public function getPropertyValuesTblPage()
    {
        return $this->propertyValuesTblPage;
    }

    /**
     * Set propertyValueReference
     *
     * @param integer $propertyValueReference
     *
     * @return BaseTblPageClassificator
     */
    public function setPropertyValueReference($propertyValueReference)
    {
        $this->propertyValueReference = $propertyValueReference;

        return $this;
    }

    /**
     * Get propertyValueReference
     *
     * @return integer
     */
    public function getPropertyValueReference()
    {
        return $this->propertyValueReference;
    }
}
