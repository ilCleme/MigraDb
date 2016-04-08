<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPagePropertyValues
 *
 * @ORM\Table(name="tbl_page_property_values", indexes={@ORM\Index(name="id_tbl_property_value_doc", columns={"id_tbl_page_property_values", "id_tbl_lingua"})})
 * @ORM\Entity
 */
class TblPagePropertyValues
{
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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

