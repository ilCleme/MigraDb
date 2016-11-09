<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblPhotoImport
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



    /**
     * Get id
     *
     * @return boolean
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTblPhotoImport
     *
     * @param integer $idTblPhotoImport
     *
     * @return BaseTblPhotoImport
     */
    public function setIdTblPhotoImport($idTblPhotoImport)
    {
        $this->idTblPhotoImport = $idTblPhotoImport;

        return $this;
    }

    /**
     * Get idTblPhotoImport
     *
     * @return integer
     */
    public function getIdTblPhotoImport()
    {
        return $this->idTblPhotoImport;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblPhotoImport
     */
    public function setIdTblLingua($idTblLingua)
    {
        $this->idTblLingua = $idTblLingua;

        return $this;
    }

    /**
     * Get idTblLingua
     *
     * @return integer
     */
    public function getIdTblLingua()
    {
        return $this->idTblLingua;
    }

    /**
     * Set idTblPhotoCat
     *
     * @param integer $idTblPhotoCat
     *
     * @return BaseTblPhotoImport
     */
    public function setIdTblPhotoCat($idTblPhotoCat)
    {
        $this->idTblPhotoCat = $idTblPhotoCat;

        return $this;
    }

    /**
     * Get idTblPhotoCat
     *
     * @return integer
     */
    public function getIdTblPhotoCat()
    {
        return $this->idTblPhotoCat;
    }

    /**
     * Set idTblPhotoCatAdded
     *
     * @param integer $idTblPhotoCatAdded
     *
     * @return BaseTblPhotoImport
     */
    public function setIdTblPhotoCatAdded($idTblPhotoCatAdded)
    {
        $this->idTblPhotoCatAdded = $idTblPhotoCatAdded;

        return $this;
    }

    /**
     * Get idTblPhotoCatAdded
     *
     * @return integer
     */
    public function getIdTblPhotoCatAdded()
    {
        return $this->idTblPhotoCatAdded;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return BaseTblPhotoImport
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set storeDirectory
     *
     * @param string $storeDirectory
     *
     * @return BaseTblPhotoImport
     */
    public function setStoreDirectory($storeDirectory)
    {
        $this->storeDirectory = $storeDirectory;

        return $this;
    }

    /**
     * Get storeDirectory
     *
     * @return string
     */
    public function getStoreDirectory()
    {
        return $this->storeDirectory;
    }

    /**
     * Set pathStoreDirectory
     *
     * @param string $pathStoreDirectory
     *
     * @return BaseTblPhotoImport
     */
    public function setPathStoreDirectory($pathStoreDirectory)
    {
        $this->pathStoreDirectory = $pathStoreDirectory;

        return $this;
    }

    /**
     * Get pathStoreDirectory
     *
     * @return string
     */
    public function getPathStoreDirectory()
    {
        return $this->pathStoreDirectory;
    }

    /**
     * Set newStoreDirectory
     *
     * @param string $newStoreDirectory
     *
     * @return BaseTblPhotoImport
     */
    public function setNewStoreDirectory($newStoreDirectory)
    {
        $this->newStoreDirectory = $newStoreDirectory;

        return $this;
    }

    /**
     * Get newStoreDirectory
     *
     * @return string
     */
    public function getNewStoreDirectory()
    {
        return $this->newStoreDirectory;
    }

    /**
     * Set quality
     *
     * @param boolean $quality
     *
     * @return BaseTblPhotoImport
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get quality
     *
     * @return boolean
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set automaticPub
     *
     * @param boolean $automaticPub
     *
     * @return BaseTblPhotoImport
     */
    public function setAutomaticPub($automaticPub)
    {
        $this->automaticPub = $automaticPub;

        return $this;
    }

    /**
     * Get automaticPub
     *
     * @return boolean
     */
    public function getAutomaticPub()
    {
        return $this->automaticPub;
    }

    /**
     * Set filesource
     *
     * @param string $filesource
     *
     * @return BaseTblPhotoImport
     */
    public function setFilesource($filesource)
    {
        $this->filesource = $filesource;

        return $this;
    }

    /**
     * Get filesource
     *
     * @return string
     */
    public function getFilesource()
    {
        return $this->filesource;
    }

    /**
     * Set deleteFilesource
     *
     * @param boolean $deleteFilesource
     *
     * @return BaseTblPhotoImport
     */
    public function setDeleteFilesource($deleteFilesource)
    {
        $this->deleteFilesource = $deleteFilesource;

        return $this;
    }

    /**
     * Get deleteFilesource
     *
     * @return boolean
     */
    public function getDeleteFilesource()
    {
        return $this->deleteFilesource;
    }

    /**
     * Set dimx
     *
     * @param integer $dimx
     *
     * @return BaseTblPhotoImport
     */
    public function setDimx($dimx)
    {
        $this->dimx = $dimx;

        return $this;
    }

    /**
     * Get dimx
     *
     * @return integer
     */
    public function getDimx()
    {
        return $this->dimx;
    }

    /**
     * Set dimy
     *
     * @param integer $dimy
     *
     * @return BaseTblPhotoImport
     */
    public function setDimy($dimy)
    {
        $this->dimy = $dimy;

        return $this;
    }

    /**
     * Get dimy
     *
     * @return integer
     */
    public function getDimy()
    {
        return $this->dimy;
    }

    /**
     * Set thumbnailDimx
     *
     * @param integer $thumbnailDimx
     *
     * @return BaseTblPhotoImport
     */
    public function setThumbnailDimx($thumbnailDimx)
    {
        $this->thumbnailDimx = $thumbnailDimx;

        return $this;
    }

    /**
     * Get thumbnailDimx
     *
     * @return integer
     */
    public function getThumbnailDimx()
    {
        return $this->thumbnailDimx;
    }

    /**
     * Set thumbnailDimy
     *
     * @param integer $thumbnailDimy
     *
     * @return BaseTblPhotoImport
     */
    public function setThumbnailDimy($thumbnailDimy)
    {
        $this->thumbnailDimy = $thumbnailDimy;

        return $this;
    }

    /**
     * Get thumbnailDimy
     *
     * @return integer
     */
    public function getThumbnailDimy()
    {
        return $this->thumbnailDimy;
    }

    /**
     * Set watermarkFilesource
     *
     * @param string $watermarkFilesource
     *
     * @return BaseTblPhotoImport
     */
    public function setWatermarkFilesource($watermarkFilesource)
    {
        $this->watermarkFilesource = $watermarkFilesource;

        return $this;
    }

    /**
     * Get watermarkFilesource
     *
     * @return string
     */
    public function getWatermarkFilesource()
    {
        return $this->watermarkFilesource;
    }

    /**
     * Set watermarkXposition
     *
     * @param array $watermarkXposition
     *
     * @return BaseTblPhotoImport
     */
    public function setWatermarkXposition($watermarkXposition)
    {
        $this->watermarkXposition = $watermarkXposition;

        return $this;
    }

    /**
     * Get watermarkXposition
     *
     * @return array
     */
    public function getWatermarkXposition()
    {
        return $this->watermarkXposition;
    }

    /**
     * Set watermarkYposition
     *
     * @param array $watermarkYposition
     *
     * @return BaseTblPhotoImport
     */
    public function setWatermarkYposition($watermarkYposition)
    {
        $this->watermarkYposition = $watermarkYposition;

        return $this;
    }

    /**
     * Get watermarkYposition
     *
     * @return array
     */
    public function getWatermarkYposition()
    {
        return $this->watermarkYposition;
    }

    /**
     * Set watermarkText
     *
     * @param string $watermarkText
     *
     * @return BaseTblPhotoImport
     */
    public function setWatermarkText($watermarkText)
    {
        $this->watermarkText = $watermarkText;

        return $this;
    }

    /**
     * Get watermarkText
     *
     * @return string
     */
    public function getWatermarkText()
    {
        return $this->watermarkText;
    }

    /**
     * Set watermarkTextsize
     *
     * @param boolean $watermarkTextsize
     *
     * @return BaseTblPhotoImport
     */
    public function setWatermarkTextsize($watermarkTextsize)
    {
        $this->watermarkTextsize = $watermarkTextsize;

        return $this;
    }

    /**
     * Get watermarkTextsize
     *
     * @return boolean
     */
    public function getWatermarkTextsize()
    {
        return $this->watermarkTextsize;
    }

    /**
     * Set watermarkTextcolor
     *
     * @param string $watermarkTextcolor
     *
     * @return BaseTblPhotoImport
     */
    public function setWatermarkTextcolor($watermarkTextcolor)
    {
        $this->watermarkTextcolor = $watermarkTextcolor;

        return $this;
    }

    /**
     * Get watermarkTextcolor
     *
     * @return string
     */
    public function getWatermarkTextcolor()
    {
        return $this->watermarkTextcolor;
    }

    /**
     * Set watermarkTextxposition
     *
     * @param array $watermarkTextxposition
     *
     * @return BaseTblPhotoImport
     */
    public function setWatermarkTextxposition($watermarkTextxposition)
    {
        $this->watermarkTextxposition = $watermarkTextxposition;

        return $this;
    }

    /**
     * Get watermarkTextxposition
     *
     * @return array
     */
    public function getWatermarkTextxposition()
    {
        return $this->watermarkTextxposition;
    }

    /**
     * Set watermarkTextyposition
     *
     * @param array $watermarkTextyposition
     *
     * @return BaseTblPhotoImport
     */
    public function setWatermarkTextyposition($watermarkTextyposition)
    {
        $this->watermarkTextyposition = $watermarkTextyposition;

        return $this;
    }

    /**
     * Get watermarkTextyposition
     *
     * @return array
     */
    public function getWatermarkTextyposition()
    {
        return $this->watermarkTextyposition;
    }
}
