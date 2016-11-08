<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPage
 *
 * @ORM\Table(name="tbl_page", indexes={@ORM\Index(name="nome", columns={"nome", "abs"})})
 * @ORM\Entity
 */
class TblPage
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
     * @ORM\Column(name="id_tbl_page", type="integer", nullable=true)
     */
    private $idTblPage = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=250, nullable=true)
     */
    private $nome = 'nome tradotto';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_menu", type="integer", nullable=true)
     */
    private $idTblMenu = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_tbl_gruppi", type="string", length=200, nullable=true)
     */
    private $checkboxTblGruppi = ',,';

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_tbl_service", type="string", length=200, nullable=true)
     */
    private $checkboxTblService = ',,';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_tipo_pagina", type="integer", nullable=true)
     */
    private $idTblTipoPagina = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_photo", type="integer", nullable=true)
     */
    private $idTblPhoto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="abs", type="text", nullable=true)
     */
    private $abs;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=true)
     */
    private $img;

    /**
     * @var integer
     *
     * @ORM\Column(name="pub", type="integer", nullable=true)
     */
    private $pub = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="utentemod", type="string", length=100, nullable=true)
     */
    private $utentemod = 'pippo (182.1.1.1)';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_photo_cat", type="integer", nullable=true)
     */
    private $idTblPhotoCat = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_title", type="string", length=255, nullable=true)
     */
    private $metaTagTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_charset", type="string", length=30, nullable=true)
     */
    private $metaTagCharset;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_generator", type="string", length=255, nullable=true)
     */
    private $metaTagGenerator;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_author", type="string", length=255, nullable=true)
     */
    private $metaTagAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_description", type="string", length=255, nullable=true)
     */
    private $metaTagDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_keywords", type="string", length=255, nullable=true)
     */
    private $metaTagKeywords;

    /**
     * @var string
     *
     * @ORM\Column(name="img_small", type="string", length=255, nullable=true)
     */
    private $imgSmall;

    /**
     * @var integer
     *
     * @ORM\Column(name="thumbnail_x", type="integer", nullable=true)
     */
    private $thumbnailX;

    /**
     * @var integer
     *
     * @ORM\Column(name="thumbnail_y", type="integer", nullable=true)
     */
    private $thumbnailY;


}

