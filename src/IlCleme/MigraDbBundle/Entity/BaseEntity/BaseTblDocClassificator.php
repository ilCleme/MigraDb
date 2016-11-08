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


}

