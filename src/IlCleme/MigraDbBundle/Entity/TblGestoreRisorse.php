<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use IlCleme\MigraDbBundle\Entity\BaseEntity\BaseTblGestoreRisorse;

/**
 * TblGestoreRisorse
 *
 * @ORM\Table(name="tbl_gestore_risorse", indexes={@ORM\Index(name="id_utente__session_id", columns={"id_utente", "session_id"}), @ORM\Index(name="risorsa", columns={"risorsa"})})
 * @ORM\Entity
 */
class TblGestoreRisorse extends BaseTblGestoreRisorse
{

}
