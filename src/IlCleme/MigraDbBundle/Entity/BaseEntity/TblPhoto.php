<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPhoto
 *
 * @ORM\Table(name="tbl_photo")
 * @ORM\Entity
 */
class TblPhoto
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
     * @ORM\Column(name="id_tbl_photo", type="integer", nullable=true)
     */
    private $idTblPhoto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    private $idTblLingua = '4';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_page", type="integer", nullable=true)
     */
    private $idTblPage = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome = 'nome tradotto';

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=true)
     */
    private $img = '.gif';

    /**
     * @var string
     *
     * @ORM\Column(name="img_big", type="string", length=255, nullable=true)
     */
    private $imgBig = '.gif';

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

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_photo_cat", type="integer", nullable=true)
     */
    private $idTblPhotoCat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="pub", type="integer", nullable=true)
     */
    private $pub = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datamod", type="datetime", nullable=true)
     */
    private $datamod;

    /**
     * @var string
     *
     * @ORM\Column(name="didascalia", type="text", length=65535, nullable=true)
     */
    private $didascalia;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=true)
     */
    private $link = '.gif';


}

