<?php

namespace models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="countries")
 */
class Country
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @ORM\OneToMany(targetEntity="SendLogAggregated", mappedBy="cnt_id")
     * @ORM\OneToMany(targetEntity="Number", mappedBy="cnt_id")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @var string
     */
    protected $cnt_code;

    /**
     * @ORM\Column(type="string", length=100)
     * @var string
     */
    protected $cnt_title;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $cnt_created;

    /**
     * @param string $cnt_code
     */
    public function setCntCode(string $cnt_code): void
    {
        $this->cnt_code = $cnt_code;
    }

    /**
     * @param string $cnt_title
     */
    public function setCntTitle(string $cnt_title): void
    {
        $this->cnt_title = $cnt_title;
    }

    /**
     * @param int $cnt_created
     */
    public function setCntCreated(int $cnt_created): void
    {
        $this->cnt_created = $cnt_created;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCntTitle(): string
    {
        return $this->cnt_title;
    }
}
