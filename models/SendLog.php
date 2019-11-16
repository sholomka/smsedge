<?php

namespace models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="send_log")
 */
class SendLog
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
     * @ORM\ManyToOne(targetEntity="Number", inversedBy="id")
     */
    protected $num;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $log_message;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $log_success;

    /**
     * @ORM\Column(type="integer")
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
     * @param string $log_message
     */
    public function setLogMessage(string $log_message): void
    {
        $this->log_message = $log_message;
    }

    /**
     * @param mixed $log_created
     */
    public function setLogCreated($log_created): void
    {
        $this->log_created = $log_created;
    }

    /**
     * @param int $log_success
     */
    public function setLogSuccess(int $log_success): void
    {
        $this->log_success = $log_success;
    }

    /**
     * @param mixed $usr
     */
    public function setUsr($usr): void
    {
        $this->usr = $usr;
    }

    /**
     * @param mixed $num
     */
    public function setNum($num): void
    {
        $this->num = $num;
    }
}