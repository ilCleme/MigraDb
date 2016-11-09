<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblInput
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
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome = 'nome input';

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=50, nullable=true)
     */
    private $tipo = 'tipo input';

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer", nullable=true)
     */
    private $posizione = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=100, nullable=true)
     */
    private $label = 'label input';

    /**
     * @var string
     *
     * @ORM\Column(name="attrs", type="text", length=65535, nullable=true)
     */
    private $attrs;

    /**
     * @var string
     *
     * @ORM\Column(name="filter", type="string", length=200, nullable=true)
     */
    private $filter;

    /**
     * @var string
     *
     * @ORM\Column(name="errmsg", type="string", length=200, nullable=true)
     */
    private $errmsg;

    /**
     * @var string
     *
     * @ORM\Column(name="ruleext", type="string", length=200, nullable=true)
     */
    private $ruleext;

    /**
     * @var string
     *
     * @ORM\Column(name="typectrl", type="string", length=200, nullable=true)
     */
    private $typectrl;

    /**
     * @var string
     *
     * @ORM\Column(name="attrs1", type="text", length=65535, nullable=true)
     */
    private $attrs1;

    /**
     * @var string
     *
     * @ORM\Column(name="attrs2", type="text", length=65535, nullable=true)
     */
    private $attrs2;



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
     * @return BaseTblInput
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return BaseTblInput
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set posizione
     *
     * @param integer $posizione
     *
     * @return BaseTblInput
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
     * Set label
     *
     * @param string $label
     *
     * @return BaseTblInput
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set attrs
     *
     * @param string $attrs
     *
     * @return BaseTblInput
     */
    public function setAttrs($attrs)
    {
        $this->attrs = $attrs;

        return $this;
    }

    /**
     * Get attrs
     *
     * @return string
     */
    public function getAttrs()
    {
        return $this->attrs;
    }

    /**
     * Set filter
     *
     * @param string $filter
     *
     * @return BaseTblInput
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Get filter
     *
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Set errmsg
     *
     * @param string $errmsg
     *
     * @return BaseTblInput
     */
    public function setErrmsg($errmsg)
    {
        $this->errmsg = $errmsg;

        return $this;
    }

    /**
     * Get errmsg
     *
     * @return string
     */
    public function getErrmsg()
    {
        return $this->errmsg;
    }

    /**
     * Set ruleext
     *
     * @param string $ruleext
     *
     * @return BaseTblInput
     */
    public function setRuleext($ruleext)
    {
        $this->ruleext = $ruleext;

        return $this;
    }

    /**
     * Get ruleext
     *
     * @return string
     */
    public function getRuleext()
    {
        return $this->ruleext;
    }

    /**
     * Set typectrl
     *
     * @param string $typectrl
     *
     * @return BaseTblInput
     */
    public function setTypectrl($typectrl)
    {
        $this->typectrl = $typectrl;

        return $this;
    }

    /**
     * Get typectrl
     *
     * @return string
     */
    public function getTypectrl()
    {
        return $this->typectrl;
    }

    /**
     * Set attrs1
     *
     * @param string $attrs1
     *
     * @return BaseTblInput
     */
    public function setAttrs1($attrs1)
    {
        $this->attrs1 = $attrs1;

        return $this;
    }

    /**
     * Get attrs1
     *
     * @return string
     */
    public function getAttrs1()
    {
        return $this->attrs1;
    }

    /**
     * Set attrs2
     *
     * @param string $attrs2
     *
     * @return BaseTblInput
     */
    public function setAttrs2($attrs2)
    {
        $this->attrs2 = $attrs2;

        return $this;
    }

    /**
     * Get attrs2
     *
     * @return string
     */
    public function getAttrs2()
    {
        return $this->attrs2;
    }
}
