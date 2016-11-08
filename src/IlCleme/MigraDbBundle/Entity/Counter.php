<?php

namespace IlCleme\MigraDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use IlCleme\MigraDbBundle\Entity\BaseEntity\BaseCounter;

/**
 * Counter
 *
 * @ORM\Table(name="counter")
 * @ORM\Entity
 */
class Counter extends BaseCounter
{

}
