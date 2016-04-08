<?php

namespace AppBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblPage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_page", type="integer", nullable=true)
     */
    protected $idTblPage = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    protected $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    protected $nome = 'nome tradotto';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_menu", type="integer", nullable=true)
     */
    protected $idTblMenu = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    protected $posizione = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_tbl_gruppi", type="string", length=255, nullable=true)
     */
    protected $checkboxTblGruppi = ',,';

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_tbl_service", type="string", length=255, nullable=true)
     */
    protected $checkboxTblService = ',,';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_tipo_pagina", type="integer", nullable=true)
     */
    protected $idTblTipoPagina = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_photo", type="integer", nullable=true)
     */
    protected $idTblPhoto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="abs", type="text", nullable=true)
     */
    protected $abs;

    /**
     * @var string
     *
     * @ORM\Column(name="utentemod", type="string", length=100, nullable=true)
     */
    protected $utentemod = 'pippo (182.1.1.1)';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_photo_cat", type="integer", nullable=true)
     */
    protected $idTblPhotoCat = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=true)
     */
    protected $img;

    /**
     * @var string
     *
     * @ORM\Column(name="img2", type="string", length=255, nullable=true)
     */
    protected $img2;

    /**
     * @var integer
     *
     * @ORM\Column(name="pub", type="integer", nullable=true)
     */
    protected $pub = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_title", type="string", length=255, nullable=true)
     */
    protected $metaTagTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_charset", type="string", length=30, nullable=true)
     */
    protected $metaTagCharset;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_generator", type="string", length=255, nullable=true)
     */
    protected $metaTagGenerator;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_author", type="string", length=255, nullable=true)
     */
    protected $metaTagAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_description", type="string", length=255, nullable=true)
     */
    protected $metaTagDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_tag_keywords", type="string", length=255, nullable=true)
     */
    protected $metaTagKeywords;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


}

