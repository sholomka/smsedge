<?php

namespace models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="send_log_aggregated")
 */
class SendLogAggregated
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="id")
     */
    protected $usr;

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="id")
     */
    protected $cnt;

    /**
     * @ORM\Column(type="string", length=100)
     * @var string
     */
    protected $log_created;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsr()
    {
        return $this->usr;
    }

    /**
     * @return mixed
     */
    public function getCnt()
    {
        return $this->cnt;
    }

    /**
     * @return string
     */
    public function getLogCreated(): string
    {
        return $this->log_created;
    }
}