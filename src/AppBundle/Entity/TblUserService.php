<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUserService
 *
 * @ORM\Table(name="tbl_user_service")
 * @ORM\Entity
 */
class TblUserService
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=30, nullable=true)
     */
    private $nome = 'nome';

    /**
     * @var string
     *
     * @ORM\Column(name="cognome", type="string", length=30, nullable=true)
     */
    private $cognome = 'cognome';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email = 'email';

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, nullable=false)
     */
    private $login = 'login';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_tbl_service", type="string", length=200, nullable=true)
     */
    private $checkboxTblService;

    /**
     * @var string
     *
     * @ORM\Column(name="indirizzo", type="string", length=30, nullable=true)
     */
    private $indirizzo;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=30, nullable=true)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="citta", type="string", length=30, nullable=true)
     */
    private $citta;

    /**
     * @var string
     *
     * @ORM\Column(name="cap", type="string", length=5, nullable=true)
     */
    private $cap;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=30, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="cellulare", type="string", length=30, nullable=true)
     */
    private $cellulare;

    /**
     * @var boolean
     *
     * @ORM\Column(name="accetta_privacy", type="boolean", nullable=false)
     */
    private $accettaPrivacy = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="accetta_newsletter", type="boolean", nullable=false)
     */
    private $accettaNewsletter = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pub", type="boolean", nullable=false)
     */
    private $pub = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_tbl_lingua", type="boolean", nullable=false)
     */
    private $idTblLingua = '4';

    /**
     * @var boolean
     *
     * @ORM\Column(name="downloaded", type="boolean", nullable=false)
     */
    private $downloaded = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="del", type="boolean", nullable=false)
     */
    private $del = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

