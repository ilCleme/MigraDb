<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use IlCleme\MigraDbBundle\Entity\BaseEntity\BaseUseronline;

/**
 * Useronline
 *
 * @ORM\Table(name="useronline", indexes={@ORM\Index(name="ip", columns={"ip", "file"})})
 * @ORM\Entity
 */
class Useronline extends BaseUseronline
{

}
