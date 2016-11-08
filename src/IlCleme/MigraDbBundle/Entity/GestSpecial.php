<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use IlCleme\MigraDbBundle\Entity\BaseEntity\BaseGestSpecial;

/**
 * GestSpecial
 *
 * @ORM\Table(name="gest_special")
 * @ORM\Entity
 */
class GestSpecial extends BaseGestSpecial
{
    /**
     * @var string
     *
     * @ORM\Column(name="tablename", type="string", length=100)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tablename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fieldname", type="string", length=100)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fieldname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=100, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=100, nullable=true)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="tabella", type="string", length=254, nullable=true)
     */
    private $tabella;

    /**
     * @var boolean
     *
     * @ORM\Column(name="size", type="boolean", nullable=true)
     */
    private $size;



    /**
     * Set tablename
     *
     * @param string $tablename
     *
     * @return GestSpecial
     */
    public function setTablename($tablename)
    {
        $this->tablename = $tablename;

        return $this;
    }

    /**
     * Get tablename
     *
     * @return string
     */
    public function getTablename()
    {
        return $this->tablename;
    }

    /**
     * Set fieldname
     *
     * @param string $fieldname
     *
     * @return GestSpecial
     */
    public function setFieldname($fieldname)
    {
        $this->fieldname = $fieldname;

        return $this;
    }

    /**
     * Get fieldname
     *
     * @return string
     */
    public function getFieldname()
    {
        return $this->fieldname;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return GestSpecial
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
     * Set value
     *
     * @param string $value
     *
     * @return GestSpecial
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set tabella
     *
     * @param string $tabella
     *
     * @return GestSpecial
     */
    public function setTabella($tabella)
    {
        $this->tabella = $tabella;

        return $this;
    }

    /**
     * Get tabella
     *
     * @return string
     */
    public function getTabella()
    {
        return $this->tabella;
    }

    /**
     * Set size
     *
     * @param boolean $size
     *
     * @return GestSpecial
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return boolean
     */
    public function getSize()
    {
        return $this->size;
    }
}
