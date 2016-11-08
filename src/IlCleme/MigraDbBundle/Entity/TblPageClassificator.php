<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use IlCleme\MigraDbBundle\Entity\BaseEntity\BaseTblPageClassificator;

/**
 * TblPageClassificator
 *
 * @ORM\Table(name="tbl_page_classificator", indexes={@ORM\Index(name="id_tbl_catalue_doc", columns={"id_tbl_lingua"})})
 * @ORM\Entity
 */
class TblPageClassificator extends BaseTblPageClassificator
{

}
