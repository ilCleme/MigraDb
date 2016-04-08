<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblDocPropertyValues
 *
 * @ORM\Table(name="tbl_doc_property_values", indexes={@ORM\Index(name="id_tbl_property_value_doc", columns={"id_tbl_doc_property_values", "id_tbl_lingua"})})
 * @ORM\Entity
 */
class TblDocPropertyValues
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_doc_property_values", type="integer", nullable=false)
     */
    private $idTblDocPropertyValues;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=false)
     */
    private $idTblLingua;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_doc_properties", type="integer", nullable=false)
     */
    private $idTblDocProperties;

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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

