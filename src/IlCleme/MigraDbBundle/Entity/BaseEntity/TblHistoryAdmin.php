<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblHistoryAdmin
 *
 * @ORM\Table(name="tbl_history_admin")
 * @ORM\Entity
 */
class TblHistoryAdmin
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


}

