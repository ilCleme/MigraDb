<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use IlCleme\MigraDbBundle\Entity\BaseEntity\BaseTblPagePropertyValues;

/**
 * TblPagePropertyValues
 *
 * @ORM\Table(name="tbl_page_property_values", indexes={@ORM\Index(name="id_tbl_property_value_doc", columns={"id_tbl_page_property_values", "id_tbl_lingua"})})
 * @ORM\Entity
 */
class TblPagePropertyValues extends BaseTblPagePropertyValues
{

}
