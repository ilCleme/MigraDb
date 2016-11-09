<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class BaseTblHistoryAdmin
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
     * @var string
     *
     * @ORM\Column(name="resource", type="string", length=255, nullable=false)
     */
    private $resource;

    /**
     * @var string
     *
     * @ORM\Column(name="string_editor", type="string", length=255, nullable=false)
     */
    private $stringEditor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_editor", type="datetime", nullable=true)
     */
    private $timeEditor;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_editor", type="string", length=15, nullable=true)
     */
    private $ipEditor;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var array
     *
     * @ORM\Column(name="type_action", type="simple_array", nullable=false)
     */
    private $typeAction = 'edit';

    /**
     * @var string
     *
     * @ORM\Column(name="field_editing", type="string", length=255, nullable=false)
     */
    private $fieldEditing;



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
     * Set resource
     *
     * @param string $resource
     *
     * @return BaseTblHistoryAdmin
     */
    public function setResource($resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Get resource
     *
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Set stringEditor
     *
     * @param string $stringEditor
     *
     * @return BaseTblHistoryAdmin
     */
    public function setStringEditor($stringEditor)
    {
        $this->stringEditor = $stringEditor;

        return $this;
    }

    /**
     * Get stringEditor
     *
     * @return string
     */
    public function getStringEditor()
    {
        return $this->stringEditor;
    }

    /**
     * Set timeEditor
     *
     * @param \DateTime $timeEditor
     *
     * @return BaseTblHistoryAdmin
     */
    public function setTimeEditor($timeEditor)
    {
        $this->timeEditor = $timeEditor;

        return $this;
    }

    /**
     * Get timeEditor
     *
     * @return \DateTime
     */
    public function getTimeEditor()
    {
        return $this->timeEditor;
    }

    /**
     * Set ipEditor
     *
     * @param string $ipEditor
     *
     * @return BaseTblHistoryAdmin
     */
    public function setIpEditor($ipEditor)
    {
        $this->ipEditor = $ipEditor;

        return $this;
    }

    /**
     * Get ipEditor
     *
     * @return string
     */
    public function getIpEditor()
    {
        return $this->ipEditor;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return BaseTblHistoryAdmin
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set typeAction
     *
     * @param array $typeAction
     *
     * @return BaseTblHistoryAdmin
     */
    public function setTypeAction($typeAction)
    {
        $this->typeAction = $typeAction;

        return $this;
    }

    /**
     * Get typeAction
     *
     * @return array
     */
    public function getTypeAction()
    {
        return $this->typeAction;
    }

    /**
     * Set fieldEditing
     *
     * @param string $fieldEditing
     *
     * @return BaseTblHistoryAdmin
     */
    public function setFieldEditing($fieldEditing)
    {
        $this->fieldEditing = $fieldEditing;

        return $this;
    }

    /**
     * Get fieldEditing
     *
     * @return string
     */
    public function getFieldEditing()
    {
        return $this->fieldEditing;
    }
}
