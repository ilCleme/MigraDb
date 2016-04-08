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
     * @ORM\Column(name="id_tbl_photo", type="integer", nullable=true)
     */
    private $idTblPhoto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=true)
     */
    private $idTblLingua;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=true)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="img_big", type="string", length=255, nullable=true)
     */
    private $imgBig;

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
    private $idTblPhotoCat;

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione;

    /**
     * @var integer
     *
     * @ORM\Column(name="pub", type="integer", nullable=true)
     */
    private $pub;

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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

