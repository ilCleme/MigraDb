<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use IlCleme\MigraDbBundle\Entity\BaseEntity\BaseTblComunicatistampa;

/**
 * TblComunicatistampa
 *
 * @ORM\Table(name="tbl_comunicatistampa", indexes={@ORM\Index(name="id_tbl_comunicatistampa", columns={"id_tbl_comunicatistampa", "id_tbl_lingua"}), @ORM\Index(name="id_tbl_comunicatistampa_cat", columns={"id_tbl_comunicatistampa_cat", "id_tbl_lingua"})})
 * @ORM\Entity
 */
class TblComunicatistampa extends BaseTblComunicatistampa
{

}
