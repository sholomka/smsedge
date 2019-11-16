<?php

namespace models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @ORM\OneToMany(targetEntity="SendLogAggregated", mappedBy="usr_id")
     * @ORM\OneToMany(targetEntity="SendLog", mappedBy="usr_id")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @var string
     */
    protected $usr_name;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $usr_active;

    /**
     * @ORM\Column(type="integer")
     */
    protected $usr_created;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $usr_name
     */
    public function setUsrName(string $usr_name): void
    {
        $this->usr_name = $usr_name;
    }

    /**
     * @param int $usr_active
     */
    public function setUsrActive(int $usr_active): void
    {
        $this->usr_active = $usr_active;
    }

    /**
     * @param mixed $usr_created
     */
    public function setUsrCreated($usr_created): void
    {
        $this->usr_created = $usr_created;
    }

    /**
     * @return string
     */
    public function getUsrName(): string
    {
        return $this->usr_name;
    }
}