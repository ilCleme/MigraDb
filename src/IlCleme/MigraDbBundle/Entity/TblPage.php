<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use IlCleme\MigraDbBundle\Entity\BaseEntity\BaseTblPage;

/**
 * TblPage
 *
 * @ORM\Table(name="tbl_page", indexes={@ORM\Index(name="nome", columns={"nome", "abs"})})
 * @ORM\Entity
 */
class TblPage extends BaseTblPage
{

}
