<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblMessaggi
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
     * @ORM\Column(name="id_tbl_messaggi", type="integer", nullable=false)
     */
    private $idTblMessaggi;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_lingua", type="integer", nullable=false)
     */
    private $idTblLingua = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="mittente", type="string", length=200, nullable=true)
     */
    private $mittente;

    /**
     * @var string
     *
     * @ORM\Column(name="destinatari", type="string", length=200, nullable=true)
     */
    private $destinatari;

    /**
     * @var string
     *
     * @ORM\Column(name="oggetto", type="string", length=80, nullable=true)
     */
    private $oggetto = 'oggetto della mail';

    /**
     * @var string
     *
     * @ORM\Column(name="messaggio", type="text", length=65535, nullable=true)
     */
    private $messaggio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Stato", type="integer", nullable=false)
     */
    private $stato = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tbl_page", type="integer", nullable=false)
     */
    private $idTblPage = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datamod", type="date", nullable=false)
     */
    private $datamod = '0000-00-00';


}

