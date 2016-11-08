<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblDoc
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
     * @ORM\Column(name="id_tbl_doc", type="integer", nullable=false)
     */
    private $idTblDoc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=false)
     */
    private $idTblLingua = '4';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_doc_cat", type="integer", nullable=false)
     */
    private $idTblDocCat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="filesource", type="string", length=255, nullable=false)
     */
    private $filesource = '';

    /**
     * @var array
     *
     * @ORM\Column(name="mimetype", type="simple_array", nullable=false)
     */
    private $mimetype = 'xxx';

    /**
     * @var boolean
     *
     * @ORM\Column(name="save_as_zip", type="boolean", nullable=false)
     */
    private $saveAsZip = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="filesize", type="integer", nullable=true)
     */
    private $filesize;

    /**
     * @var string
     *
     * @ORM\Column(name="img_preview", type="string", length=255, nullable=true)
     */
    private $imgPreview;

    /**
     * @var string
     *
     * @ORM\Column(name="cod", type="string", length=255, nullable=true)
     */
    private $cod;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=true)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255, nullable=true)
     */
    private $author;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_publication", type="date", nullable=true)
     */
    private $dataPublication;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_times_downloaded", type="bigint", nullable=true)
     */
    private $numTimesDownloaded;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pub", type="boolean", nullable=false)
     */
    private $pub = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="date", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="date", nullable=true)
     */
    private $dateEnd;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos", type="integer", nullable=false)
     */
    private $pos = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="tag_associated", type="string", length=255, nullable=false)
     */
    private $tagAssociated = '';


}

