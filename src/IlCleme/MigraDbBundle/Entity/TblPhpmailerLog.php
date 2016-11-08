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
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @ORM\Column(name="mail_log", type="text", length=65535, nullable=false)
     */
    private $mailLog;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mail_date", type="datetime", nullable=false)
     */
    private $mailDate = 'CURRENT_TIMESTAMP';



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
     * Set environment
     *
     * @param array $environment
     *
     * @return TblPhpmailerLog
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;

        return $this;
    }

    /**
     * Get environment
     *
     * @return array
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return TblPhpmailerLog
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set ipUser
     *
     * @param string $ipUser
     *
     * @return TblPhpmailerLog
     */
    public function setIpUser($ipUser)
    {
        $this->ipUser = $ipUser;

        return $this;
    }

    /**
     * Get ipUser
     *
     * @return string
     */
    public function getIpUser()
    {
        return $this->ipUser;
    }

    /**
     * Set mailScript
     *
     * @param string $mailScript
     *
     * @return TblPhpmailerLog
     */
    public function setMailScript($mailScript)
    {
        $this->mailScript = $mailScript;

        return $this;
    }

    /**
     * Get mailScript
     *
     * @return string
     */
    public function getMailScript()
    {
        return $this->mailScript;
    }

    /**
     * Set mailSmtp
     *
     * @param string $mailSmtp
     *
     * @return TblPhpmailerLog
     */
    public function setMailSmtp($mailSmtp)
    {
        $this->mailSmtp = $mailSmtp;

        return $this;
    }

    /**
     * Get mailSmtp
     *
     * @return string
     */
    public function getMailSmtp()
    {
        return $this->mailSmtp;
    }

    /**
     * Set mailAuth
     *
     * @param array $mailAuth
     *
     * @return TblPhpmailerLog
     */
    public function setMailAuth($mailAuth)
    {
        $this->mailAuth = $mailAuth;

        return $this;
    }

    /**
     * Get mailAuth
     *
     * @return array
     */
    public function getMailAuth()
    {
        return $this->mailAuth;
    }

    /**
     * Set mailFrom
     *
     * @param string $mailFrom
     *
     * @return TblPhpmailerLog
     */
    public function setMailFrom($mailFrom)
    {
        $this->mailFrom = $mailFrom;

        return $this;
    }

    /**
     * Get mailFrom
     *
     * @return string
     */
    public function getMailFrom()
    {
        return $this->mailFrom;
    }

    /**
     * Set mailFromname
     *
     * @param string $mailFromname
     *
     * @return TblPhpmailerLog
     */
    public function setMailFromname($mailFromname)
    {
        $this->mailFromname = $mailFromname;

        return $this;
    }

    /**
     * Get mailFromname
     *
     * @return string
     */
    public function getMailFromname()
    {
        return $this->mailFromname;
    }

    /**
     * Set mailTo
     *
     * @param string $mailTo
     *
     * @return TblPhpmailerLog
     */
    public function setMailTo($mailTo)
    {
        $this->mailTo = $mailTo;

        return $this;
    }

    /**
     * Get mailTo
     *
     * @return string
     */
    public function getMailTo()
    {
        return $this->mailTo;
    }

    /**
     * Set mailCc
     *
     * @param string $mailCc
     *
     * @return TblPhpmailerLog
     */
    public function setMailCc($mailCc)
    {
        $this->mailCc = $mailCc;

        return $this;
    }

    /**
     * Get mailCc
     *
     * @return string
     */
    public function getMailCc()
    {
        return $this->mailCc;
    }

    /**
     * Set mailBcc
     *
     * @param string $mailBcc
     *
     * @return TblPhpmailerLog
     */
    public function setMailBcc($mailBcc)
    {
        $this->mailBcc = $mailBcc;

        return $this;
    }

    /**
     * Get mailBcc
     *
     * @return string
     */
    public function getMailBcc()
    {
        return $this->mailBcc;
    }

    /**
     * Set mailSubject
     *
     * @param string $mailSubject
     *
     * @return TblPhpmailerLog
     */
    public function setMailSubject($mailSubject)
    {
        $this->mailSubject = $mailSubject;

        return $this;
    }

    /**
     * Get mailSubject
     *
     * @return string
     */
    public function getMailSubject()
    {
        return $this->mailSubject;
    }

    /**
     * Set mailHtml
     *
     * @param array $mailHtml
     *
     * @return TblPhpmailerLog
     */
    public function setMailHtml($mailHtml)
    {
        $this->mailHtml = $mailHtml;

        return $this;
    }

    /**
     * Get mailHtml
     *
     * @return array
     */
    public function getMailHtml()
    {
        return $this->mailHtml;
    }

    /**
     * Set mailBody
     *
     * @param string $mailBody
     *
     * @return TblPhpmailerLog
     */
    public function setMailBody($mailBody)
    {
        $this->mailBody = $mailBody;

        return $this;
    }

    /**
     * Get mailBody
     *
     * @return string
     */
    public function getMailBody()
    {
        return $this->mailBody;
    }

    /**
     * Set mailAltbody
     *
     * @param string $mailAltbody
     *
     * @return TblPhpmailerLog
     */
    public function setMailAltbody($mailAltbody)
    {
        $this->mailAltbody = $mailAltbody;

        return $this;
    }

    /**
     * Get mailAltbody
     *
     * @return string
     */
    public function getMailAltbody()
    {
        return $this->mailAltbody;
    }

    /**
     * Set mailLog
     *
     * @param string $mailLog
     *
     * @return TblPhpmailerLog
     */
    public function setMailLog($mailLog)
    {
        $this->mailLog = $mailLog;

        return $this;
    }

    /**
     * Get mailLog
     *
     * @return string
     */
    public function getMailLog()
    {
        return $this->mailLog;
    }

    /**
     * Set mailDate
     *
     * @param \DateTime $mailDate
     *
     * @return TblPhpmailerLog
     */
    public function setMailDate($mailDate)
    {
        $this->mailDate = $mailDate;

        return $this;
    }

    /**
     * Get mailDate
     *
     * @return \DateTime
     */
    public function getMailDate()
    {
        return $this->mailDate;
    }
}
