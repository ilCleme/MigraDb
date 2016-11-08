<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use IlCleme\MigraDbBundle\Entity\BaseEntity\BaseTblPageProperties;

/**
 * TblPageProperties
 *
 * @ORM\Table(name="tbl_page_properties", indexes={@ORM\Index(name="id_tbl_properties_doc", columns={"id_tbl_page_properties", "id_tbl_lingua"})})
 * @ORM\Entity
 */
class TblPageProperties extends BaseTblPageProperties
{

}
