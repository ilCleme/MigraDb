<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPhotoImport
 *
 * @ORM\Table(name="tbl_photo_import")
 * @ORM\Entity
 */
class TblPhotoImport
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_photo_import", type="integer", nullable=false)
     */
    private $idTblPhotoImport;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=false)
     */
    private $idTblLingua;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_photo_cat", type="integer", nullable=true)
     */
    private $idTblPhotoCat;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_photo_cat_added", type="integer", nullable=true)
     */
    private $idTblPhotoCatAdded;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="store_directory", type="string", length=255, nullable=true)
     */
    private $storeDirectory;

    /**
     * @var string
     *
     * @ORM\Column(name="path_store_directory", type="string", length=255, nullable=true)
     */
    private $pathStoreDirectory;

    /**
     * @var string
     *
     * @ORM\Column(name="new_store_directory", type="string", length=255, nullable=true)
     */
    private $newStoreDirectory;

    /**
     * @var boolean
     *
     * @ORM\Column(name="quality", type="boolean", nullable=false)
     */
    private $quality;

    /**
     * @var boolean
     *
     * @ORM\Column(name="automatic_pub", type="boolean", nullable=true)
     */
    private $automaticPub;

    /**
     * @var string
     *
     * @ORM\Column(name="filesource", type="string", length=255, nullable=false)
     */
    private $filesource;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delete_filesource", type="boolean", nullable=true)
     */
    private $deleteFilesource;

    /**
     * @var integer
     *
     * @ORM\Column(name="dimx", type="integer", nullable=true)
     */
    private $dimx;

    /**
     * @var integer
     *
     * @ORM\Column(name="dimy", type="integer", nullable=true)
     */
    private $dimy;

    /**
     * @var integer
     *
     * @ORM\Column(name="thumbnail_dimx", type="integer", nullable=true)
     */
    private $thumbnailDimx;

    /**
     * @var integer
     *
     * @ORM\Column(name="thumbnail_dimy", type="integer", nullable=true)
     */
    private $thumbnailDimy;

    /**
     * @var string
     *
     * @ORM\Column(name="watermark_filesource", type="string", length=255, nullable=true)
     */
    private $watermarkFilesource;

    /**
     * @var array
     *
     * @ORM\Column(name="watermark_xposition", type="simple_array", nullable=true)
     */
    private $watermarkXposition;

    /**
     * @var array
     *
     * @ORM\Column(name="watermark_yposition", type="simple_array", nullable=true)
     */
    private $watermarkYposition;

    /**
     * @var string
     *
     * @ORM\Column(name="watermark_text", type="string", length=255, nullable=true)
     */
    private $watermarkText;

    /**
     * @var boolean
     *
     * @ORM\Column(name="watermark_textsize", type="boolean", nullable=true)
     */
    private $watermarkTextsize;

    /**
     * @var string
     *
     * @ORM\Column(name="watermark_textcolor", type="string", length=7, nullable=true)
     */
    private $watermarkTextcolor;

    /**
     * @var array
     *
     * @ORM\Column(name="watermark_textxposition", type="simple_array", nullable=true)
     */
    private $watermarkTextxposition;

    /**
     * @var array
     *
     * @ORM\Column(name="watermark_textyposition", type="simple_array", nullable=true)
     */
    private $watermarkTextyposition;


}

