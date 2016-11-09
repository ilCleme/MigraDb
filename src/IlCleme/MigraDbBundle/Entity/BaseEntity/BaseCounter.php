<?php

namespace IlCleme\MigraDbBundle\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
abstract class BaseCounter
{
    /**
     * @var string
     *
     * @ORM\Column(name="page", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $page = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hit", type="integer", nullable=false)
     */
    private $hit = '0';



    /**
     * Get page
     *
     * @return string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set hit
     *
     * @param integer $hit
     *
     * @return BaseCounter
     */
    public function setHit($hit)
    {
        $this->hit = $hit;

        return $this;
    }

    /**
     * Get hit
     *
     * @return integer
     */
    public function getHit()
    {
        return $this->hit;
    }
}
