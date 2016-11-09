<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblForm
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
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome = 'nome form';

    /**
     * @var string
     *
     * @ORM\Column(name="lista_input", type="string", length=255, nullable=true)
     */
    private $listaInput;

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="predefiniti", type="text", length=65535, nullable=true)
     */
    private $predefiniti;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=200, nullable=true)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="smarty", type="string", length=200, nullable=true)
     */
    private $smarty;



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
     * @return BaseTblForm
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
     * Set listaInput
     *
     * @param string $listaInput
     *
     * @return BaseTblForm
     */
    public function setListaInput($listaInput)
    {
        $this->listaInput = $listaInput;

        return $this;
    }

    /**
     * Get listaInput
     *
     * @return string
     */
    public function getListaInput()
    {
        return $this->listaInput;
    }

    /**
     * Set posizione
     *
     * @param integer $posizione
     *
     * @return BaseTblForm
     */
    public function setPosizione($posizione)
    {
        $this->posizione = $posizione;

        return $this;
    }

    /**
     * Get posizione
     *
     * @return integer
     */
    public function getPosizione()
    {
        return $this->posizione;
    }

    /**
     * Set predefiniti
     *
     * @param string $predefiniti
     *
     * @return BaseTblForm
     */
    public function setPredefiniti($predefiniti)
    {
        $this->predefiniti = $predefiniti;

        return $this;
    }

    /**
     * Get predefiniti
     *
     * @return string
     */
    public function getPredefiniti()
    {
        return $this->predefiniti;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return BaseTblForm
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set smarty
     *
     * @param string $smarty
     *
     * @return BaseTblForm
     */
    public function setSmarty($smarty)
    {
        $this->smarty = $smarty;

        return $this;
    }

    /**
     * Get smarty
     *
     * @return string
     */
    public function getSmarty()
    {
        return $this->smarty;
    }
}
