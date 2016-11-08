<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblComunicatistampa
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
     * @ORM\Column(name="id_tbl_comunicatistampa", type="integer", nullable=true)
     */
    private $idTblComunicatistampa = '0';

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
    private $titolo;

    /**
     * @var string
     *
     * @ORM\Column(name="sottotitolo", type="string", length=255, nullable=true)
     */
    private $sottotitolo;

    /**
     * @var string
     *
     * @ORM\Column(name="comunicato", type="text", nullable=true)
     */
    private $comunicato;

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
     * @ORM\Column(name="data_inizio_pub", type="date", nullable=false)
     */
    private $dataInizioPub = '0000-00-00';

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
     * @ORM\Column(name="data_comunicato", type="date", nullable=true)
     */
    private $dataComunicato = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_comunicatistampa_cat", type="integer", nullable=true)
     */
    private $idTblComunicatistampaCat = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_preview", type="boolean", nullable=true)
     */
    private $inPreview;


}

