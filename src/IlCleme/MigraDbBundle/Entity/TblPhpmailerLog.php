<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPhpmailerLog
 *
 * @ORM\Table(name="tbl_phpmailer_log", indexes={@ORM\Index(name="mail_date", columns={"mail_date"})})
 * @ORM\Entity
 */
class TblPhpmailerLog
{
    /**
     * @var array
     *
     * @ORM\Column(name="environment", type="simple_array", nullable=false)
     */
    private $environment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_user", type="string", length=15, nullable=false)
     */
    private $ipUser;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_script", type="string", length=255, nullable=false)
     */
    private $mailScript;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_smtp", type="string", length=255, nullable=false)
     */
    private $mailSmtp;

    /**
     * @var array
     *
     * @ORM\Column(name="mail_auth", type="simple_array", nullable=false)
     */
    private $mailAuth;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_from", type="string", length=255, nullable=false)
     */
    private $mailFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_fromname", type="string", length=255, nullable=true)
     */
    private $mailFromname;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_to", type="string", length=255, nullable=false)
     */
    private $mailTo;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_cc", type="string", length=255, nullable=true)
     */
    private $mailCc;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_bcc", type="string", length=255, nullable=true)
     */
    private $mailBcc;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_subject", type="string", length=255, nullable=false)
     */
    private $mailSubject;

    /**
     * @var array
     *
     * @ORM\Column(name="mail_html", type="simple_array", nullable=false)
     */
    private $mailHtml;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_body", type="text", nullable=true)
     */
    private $mailBody;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_altbody", type="text", nullable=true)
     */
    private $mailAltbody;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_body_inline", type="text", nullable=true)
     */
    private $mailBodyInline;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_log", type="text", length=65535, nullable=false)
     */
    private $mailLog;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mail_date", type="datetime", nullable=false)
     */
    private $mailDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

