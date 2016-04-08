<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPageClassificator
 *
 * @ORM\Table(name="tbl_page_classificator", indexes={@ORM\Index(name="id_tbl_catalue_doc", columns={"id_tbl_lingua"})})
 * @ORM\Entity
 */
class TblPageClassificator
{
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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

