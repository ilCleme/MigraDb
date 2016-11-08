<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUser
 *
 * @ORM\Table(name="tbl_user")
 * @ORM\Entity
 */
class TblUser
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
     * @ORM\Column(name="login", type="string", length=20, nullable=false)
     */
    private $login = 'login';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password = 'passw';

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_tbl_gruppi", type="string", length=200, nullable=true)
     */
    private $checkboxTblGruppi = ',,';

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox1_tbl_gruppi", type="string", length=200, nullable=true)
     */
    private $checkbox1TblGruppi = ',,';


}

