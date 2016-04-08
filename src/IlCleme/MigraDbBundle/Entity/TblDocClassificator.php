<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblDocClassificator
 *
 * @ORM\Table(name="tbl_doc_classificator", indexes={@ORM\Index(name="id_tbl_catalue_doc", columns={"id_tbl_lingua"})})
 * @ORM\Entity
 */
class TblDocClassificator
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=false)
     */
    private $idTblLingua;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_doc", type="integer", nullable=false)
     */
    private $idTblDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_doc_properties", type="integer", nullable=false)
     */
    private $idTblDocProperties;

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
    private $propertyValueReference;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

