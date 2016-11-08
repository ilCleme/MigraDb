<?php
/**
 * Created by PhpStorm.
 * User: Daniele
 * Date: 08/11/2016
 * Time: 17:58
 */

namespace IlCleme\MigraDbBundle\Entity;


use IlCleme\MigraDbBundle\Entity\BaseEntity\BaseTblMessaggi;
use Doctrine\ORM\Mapping as ORM;

/**
 * TblMessaggi
 *
 * @ORM\Table(name="tbl_messaggi")
 * @ORM\Entity
 */
class TblMessaggi extends BaseTblMessaggi
{

}