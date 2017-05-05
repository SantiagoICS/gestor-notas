<?php

namespace NoteBundle\Entity;

/**
 * Priority
 */
class Priority
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $showOrder;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Priority
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set showOrder
     *
     * @param integer $showOrder
     *
     * @return Priority
     */
    public function setShowOrder($showOrder)
    {
        $this->showOrder = $showOrder;

        return $this;
    }

    /**
     * Get showOrder
     *
     * @return int
     */
    public function getShowOrder()
    {
        return $this->showOrder;
    }
}

