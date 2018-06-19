<?php

// src/Entity/ProductionCapacities.php
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A Production Capacities.
 *
 * @ORM\Entity
 * @ApiResource
 */
class ProductionCapacities
{
    /**
     * @var int The id of this production Capacitiy.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var integer The amount of produciton capacities.
     *
     * @Assert\Type(type="integer")
     * @Assert\Range(min=0, max=100000)
     * @ORM\Column(type="integer")
     */
    public $amount;

    /**
     * @var ProductionUnit 
     *
     * @Assert\NotNull
     * @ORM\ManyToOne(targetEntity="App\Entity\ProductionUnit")
     * @ORM\JoinColumn(nullable=false)
     */
    private $productionUnit;

    /**
     * @var ProductGroup 
     *
     * @Assert\NotNull
     * @ORM\ManyToOne(targetEntity="App\Entity\ProductGroup")
     * @ORM\JoinColumn(nullable=false)
     */
    private $productGroup;


    /**
     * @var TimeUnit 
     *
     * @Assert\NotNull
     * @ORM\ManyToOne(targetEntity="App\Entity\TimeUnit")
     * @ORM\JoinColumn(nullable=false)
     */
    private $timeUnit;

    public function __construct() {

        $this->productionUnit = new ArrayCollection();

        $this->timeUnit = new ArrayCollection();

        $this->productGroup = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets amount.
     *
     * @param integer $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get amount.
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Get productionUnit
     *
     * @return productionUnit
     */
    public function getProductionUnit()
    {
        return $this->productionUnit;
    }

    /**
     * Set production unit.
     *
     * @param ProductionUnit $productionUnit the value to set
     */
    public function setProductionUnit(ProductionUnit $productionUnit)
    {
        $this->productionUnit = $productionUnit;
    }

    /**
     * Get timeUnit
     *
     * @return timeUnit
     */
    public function getTimeUnit()
    {
        return $this->timeUnit;
    }

    /**
     * Set timeUnit
     *
     * @param TimeUnit $timeUnit the value to set
     */
    public function setTimeUnit(TimeUnit $timeUnit)
    {
        $this->timeUnit = $timeUnit;
    }

    /**
     * Get productGroup
     *
     * @return productGroup
     */
    public function getProductGroup()
    {
        return $this->productGroup;
    }

    /**
     * Set productGroup
     *
     * @param ProductGroup $productGroup the value to set
     */
    public function setProductGroup(ProductGroup $productGroup)
    {
        $this->productGroup = $productGroup;
    }

}