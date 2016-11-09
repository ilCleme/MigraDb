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



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTblDoc
     *
     * @param integer $idTblDoc
     *
     * @return BaseTblDoc
     */
    public function setIdTblDoc($idTblDoc)
    {
        $this->idTblDoc = $idTblDoc;

        return $this;
    }

    /**
     * Get idTblDoc
     *
     * @return integer
     */
    public function getIdTblDoc()
    {
        return $this->idTblDoc;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblDoc
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
     * Set idTblDocCat
     *
     * @param integer $idTblDocCat
     *
     * @return BaseTblDoc
     */
    public function setIdTblDocCat($idTblDocCat)
    {
        $this->idTblDocCat = $idTblDocCat;

        return $this;
    }

    /**
     * Get idTblDocCat
     *
     * @return integer
     */
    public function getIdTblDocCat()
    {
        return $this->idTblDocCat;
    }

    /**
     * Set filesource
     *
     * @param string $filesource
     *
     * @return BaseTblDoc
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
     * Set mimetype
     *
     * @param array $mimetype
     *
     * @return BaseTblDoc
     */
    public function setMimetype($mimetype)
    {
        $this->mimetype = $mimetype;

        return $this;
    }

    /**
     * Get mimetype
     *
     * @return array
     */
    public function getMimetype()
    {
        return $this->mimetype;
    }

    /**
     * Set saveAsZip
     *
     * @param boolean $saveAsZip
     *
     * @return BaseTblDoc
     */
    public function setSaveAsZip($saveAsZip)
    {
        $this->saveAsZip = $saveAsZip;

        return $this;
    }

    /**
     * Get saveAsZip
     *
     * @return boolean
     */
    public function getSaveAsZip()
    {
        return $this->saveAsZip;
    }

    /**
     * Set filesize
     *
     * @param integer $filesize
     *
     * @return BaseTblDoc
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;

        return $this;
    }

    /**
     * Get filesize
     *
     * @return integer
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Set imgPreview
     *
     * @param string $imgPreview
     *
     * @return BaseTblDoc
     */
    public function setImgPreview($imgPreview)
    {
        $this->imgPreview = $imgPreview;

        return $this;
    }

    /**
     * Get imgPreview
     *
     * @return string
     */
    public function getImgPreview()
    {
        return $this->imgPreview;
    }

    /**
     * Set cod
     *
     * @param string $cod
     *
     * @return BaseTblDoc
     */
    public function setCod($cod)
    {
        $this->cod = $cod;

        return $this;
    }

    /**
     * Get cod
     *
     * @return string
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return BaseTblDoc
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return BaseTblDoc
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return BaseTblDoc
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return BaseTblDoc
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set dataPublication
     *
     * @param \DateTime $dataPublication
     *
     * @return BaseTblDoc
     */
    public function setDataPublication($dataPublication)
    {
        $this->dataPublication = $dataPublication;

        return $this;
    }

    /**
     * Get dataPublication
     *
     * @return \DateTime
     */
    public function getDataPublication()
    {
        return $this->dataPublication;
    }

    /**
     * Set numTimesDownloaded
     *
     * @param integer $numTimesDownloaded
     *
     * @return BaseTblDoc
     */
    public function setNumTimesDownloaded($numTimesDownloaded)
    {
        $this->numTimesDownloaded = $numTimesDownloaded;

        return $this;
    }

    /**
     * Get numTimesDownloaded
     *
     * @return integer
     */
    public function getNumTimesDownloaded()
    {
        return $this->numTimesDownloaded;
    }

    /**
     * Set pub
     *
     * @param boolean $pub
     *
     * @return BaseTblDoc
     */
    public function setPub($pub)
    {
        $this->pub = $pub;

        return $this;
    }

    /**
     * Get pub
     *
     * @return boolean
     */
    public function getPub()
    {
        return $this->pub;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return BaseTblDoc
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     *
     * @return BaseTblDoc
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set pos
     *
     * @param integer $pos
     *
     * @return BaseTblDoc
     */
    public function setPos($pos)
    {
        $this->pos = $pos;

        return $this;
    }

    /**
     * Get pos
     *
     * @return integer
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Set tagAssociated
     *
     * @param string $tagAssociated
     *
     * @return BaseTblDoc
     */
    public function setTagAssociated($tagAssociated)
    {
        $this->tagAssociated = $tagAssociated;

        return $this;
    }

    /**
     * Get tagAssociated
     *
     * @return string
     */
    public function getTagAssociated()
    {
        return $this->tagAssociated;
    }
}
