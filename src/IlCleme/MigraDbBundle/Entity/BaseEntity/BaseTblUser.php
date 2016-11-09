<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblUser
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
     * Set nome
     *
     * @param string $nome
     *
     * @return BaseTblUser
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
     * Set cognome
     *
     * @param string $cognome
     *
     * @return BaseTblUser
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return BaseTblUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return BaseTblUser
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return BaseTblUser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set checkboxTblGruppi
     *
     * @param string $checkboxTblGruppi
     *
     * @return BaseTblUser
     */
    public function setCheckboxTblGruppi($checkboxTblGruppi)
    {
        $this->checkboxTblGruppi = $checkboxTblGruppi;

        return $this;
    }

    /**
     * Get checkboxTblGruppi
     *
     * @return string
     */
    public function getCheckboxTblGruppi()
    {
        return $this->checkboxTblGruppi;
    }

    /**
     * Set checkbox1TblGruppi
     *
     * @param string $checkbox1TblGruppi
     *
     * @return BaseTblUser
     */
    public function setCheckbox1TblGruppi($checkbox1TblGruppi)
    {
        $this->checkbox1TblGruppi = $checkbox1TblGruppi;

        return $this;
    }

    /**
     * Get checkbox1TblGruppi
     *
     * @return string
     */
    public function getCheckbox1TblGruppi()
    {
        return $this->checkbox1TblGruppi;
    }
}
