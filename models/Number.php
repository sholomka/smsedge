<?php

namespace models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="numbers")
 */
class Number
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @ORM\OneToMany(targetEntity="SendLog", mappedBy="num_id")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="id")
     */
    protected $cnt;

    /**
     * @ORM\Column(type="string", length=100)
     * @var string
     */
    protected $num_number;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $num_created;

    /**
     * @param string $num_number
     */
    public function setNumNumber(string $num_number): void
    {
        $this->num_number = $num_number;
    }

    /**
     * @param int $num_created
     */
    public function setNumCreated(int $num_created): void
    {
        $this->num_created = $num_created;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $cnt
     */
    public function setCnt($cnt): void
    {
        $this->cnt = $cnt;
    }
}