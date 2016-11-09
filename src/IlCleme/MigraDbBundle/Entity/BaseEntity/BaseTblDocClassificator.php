<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblDocClassificator
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
     * @ORM\Column(name="id_tbl_doc", type="integer", nullable=false)
     */
    private $idTblDoc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_doc_properties", type="integer", nullable=false)
     */
    private $idTblDocProperties = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="property_values_tbl_doc", type="string", length=255, nullable=true)
     */
    private $propertyValuesTblDoc;

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
     * @return BaseTblDocClassificator
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
     * Set idTblDoc
     *
     * @param integer $idTblDoc
     *
     * @return BaseTblDocClassificator
     */
    public function setIdTblDoc($idTblDoc)
    {
        $this->idTblDoc = $idTblDoc;

        return $this;
    }

    /**
     * Get idTblDoc
     *
     * @return integer
     */
    public function getIdTblDoc()
    {
        return $this->idTblDoc;
    }

    /**
     * Set idTblDocProperties
     *
     * @param integer $idTblDocProperties
     *
     * @return BaseTblDocClassificator
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
     * Set propertyValuesTblDoc
     *
     * @param string $propertyValuesTblDoc
     *
     * @return BaseTblDocClassificator
     */
    public function setPropertyValuesTblDoc($propertyValuesTblDoc)
    {
        $this->propertyValuesTblDoc = $propertyValuesTblDoc;

        return $this;
    }

    /**
     * Get propertyValuesTblDoc
     *
     * @return string
     */
    public function getPropertyValuesTblDoc()
    {
        return $this->propertyValuesTblDoc;
    }

    /**
     * Set propertyValueReference
     *
     * @param integer $propertyValueReference
     *
     * @return BaseTblDocClassificator
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
