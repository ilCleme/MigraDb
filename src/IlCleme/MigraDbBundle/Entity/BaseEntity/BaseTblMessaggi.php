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
     * Set idTblMessaggi
     *
     * @param integer $idTblMessaggi
     *
     * @return BaseTblMessaggi
     */
    public function setIdTblMessaggi($idTblMessaggi)
    {
        $this->idTblMessaggi = $idTblMessaggi;

        return $this;
    }

    /**
     * Get idTblMessaggi
     *
     * @return integer
     */
    public function getIdTblMessaggi()
    {
        return $this->idTblMessaggi;
    }

    /**
     * Set idTblLingua
     *
     * @param integer $idTblLingua
     *
     * @return BaseTblMessaggi
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
     * Set mittente
     *
     * @param string $mittente
     *
     * @return BaseTblMessaggi
     */
    public function setMittente($mittente)
    {
        $this->mittente = $mittente;

        return $this;
    }

    /**
     * Get mittente
     *
     * @return string
     */
    public function getMittente()
    {
        return $this->mittente;
    }

    /**
     * Set destinatari
     *
     * @param string $destinatari
     *
     * @return BaseTblMessaggi
     */
    public function setDestinatari($destinatari)
    {
        $this->destinatari = $destinatari;

        return $this;
    }

    /**
     * Get destinatari
     *
     * @return string
     */
    public function getDestinatari()
    {
        return $this->destinatari;
    }

    /**
     * Set oggetto
     *
     * @param string $oggetto
     *
     * @return BaseTblMessaggi
     */
    public function setOggetto($oggetto)
    {
        $this->oggetto = $oggetto;

        return $this;
    }

    /**
     * Get oggetto
     *
     * @return string
     */
    public function getOggetto()
    {
        return $this->oggetto;
    }

    /**
     * Set messaggio
     *
     * @param string $messaggio
     *
     * @return BaseTblMessaggi
     */
    public function setMessaggio($messaggio)
    {
        $this->messaggio = $messaggio;

        return $this;
    }

    /**
     * Get messaggio
     *
     * @return string
     */
    public function getMessaggio()
    {
        return $this->messaggio;
    }

    /**
     * Set stato
     *
     * @param integer $stato
     *
     * @return BaseTblMessaggi
     */
    public function setStato($stato)
    {
        $this->stato = $stato;

        return $this;
    }

    /**
     * Get stato
     *
     * @return integer
     */
    public function getStato()
    {
        return $this->stato;
    }

    /**
     * Set idTblPage
     *
     * @param integer $idTblPage
     *
     * @return BaseTblMessaggi
     */
    public function setIdTblPage($idTblPage)
    {
        $this->idTblPage = $idTblPage;

        return $this;
    }

    /**
     * Get idTblPage
     *
     * @return integer
     */
    public function getIdTblPage()
    {
        return $this->idTblPage;
    }

    /**
     * Set datamod
     *
     * @param \DateTime $datamod
     *
     * @return BaseTblMessaggi
     */
    public function setDatamod($datamod)
    {
        $this->datamod = $datamod;

        return $this;
    }

    /**
     * Get datamod
     *
     * @return \DateTime
     */
    public function getDatamod()
    {
        return $this->datamod;
    }
}
