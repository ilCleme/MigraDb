<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblDocProperties
 *
 * @ORM\Table(name="tbl_doc_properties", indexes={@ORM\Index(name="id_tbl_properties_doc", columns={"id_tbl_doc_properties", "id_tbl_lingua"})})
 * @ORM\Entity
 */
class TblDocProperties
{
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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

