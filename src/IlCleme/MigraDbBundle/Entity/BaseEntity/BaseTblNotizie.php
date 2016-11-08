<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblNotizie
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
     * @ORM\Column(name="id_tbl_notizie", type="integer", nullable=true)
     */
    private $idTblNotizie = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="cod", type="string", length=255, nullable=true)
     */
    private $cod;

    /**
     * @var string
     *
     * @ORM\Column(name="titolo", type="string", length=255, nullable=false)
     */
    private $titolo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sottotitolo", type="string", length=255, nullable=false)
     */
    private $sottotitolo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="notizia", type="text", nullable=true)
     */
    private $notizia;

    /**
     * @var string
     *
     * @ORM\Column(name="searchable", type="text", nullable=true)
     */
    private $searchable;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=100, nullable=true)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="id_tbl_page", type="string", length=255, nullable=true)
     */
    private $idTblPage;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=100, nullable=true)
     */
    private $img;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pub", type="boolean", nullable=true)
     */
    private $pub;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inizio_pub", type="date", nullable=true)
     */
    private $dataInizioPub;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_fine_pub", type="date", nullable=true)
     */
    private $dataFinePub;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_fine_pub_preview", type="date", nullable=true)
     */
    private $dataFinePubPreview;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_notizia", type="date", nullable=true)
     */
    private $dataNotizia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_notizie_cat", type="integer", nullable=true)
     */
    private $idTblNotizieCat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_preview", type="boolean", nullable=true)
     */
    private $inPreview;

    /**
     * @var array
     *
     * @ORM\Column(name="in_preview_where", type="simple_array", nullable=true)
     */
    private $inPreviewWhere;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_agenda", type="integer", nullable=true)
     */
    private $idTblAgenda;

    /**
     * @var boolean
     *
     * @ORM\Column(name="have_agenda", type="boolean", nullable=false)
     */
    private $haveAgenda = '0';


}

