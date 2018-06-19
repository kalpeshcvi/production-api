<?php

// src/Entity/TimeUnit.php
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A Time Unit.
 *
 * @ORM\Entity
 * @ApiResource
 */
class TimeUnit
{
    /**
     * @var int The id of this time unit.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The name of time unit.
     *
     * @ORM\Column
     * @Assert\Type(type="string")
     * @Assert\NotBlank
     * @ORM\Column
     */
    public $name;

    public function __construct() {
        //$this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets name.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}