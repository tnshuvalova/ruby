<?php

namespace tshuvalova\PerformanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 */
class Project
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tasks;


    public $active_tasks;

    public $more_tasks;

    public function setMoreTasks($tasks)
    {
        $this->more_tasks = $tasks >=  0 ? $tasks : 0;
    }

    public function getMoreTasks()
    {
        return $this->more_tasks;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tasks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Project
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
     * Add tasks
     *
     * @param \tshuvalova\PerformanceBundle\Entity\Task $tasks
     * @return Project
     */
    public function addTask(\tshuvalova\PerformanceBundle\Entity\Task $tasks)
    {
        $this->tasks[] = $tasks;

        return $this;
    }

    /**
     * Remove tasks
     *
     * @param \tshuvalova\PerformanceBundle\Entity\Task $tasks
     */
    public function removeTask(\tshuvalova\PerformanceBundle\Entity\Task $tasks)
    {
        $this->tasks->removeElement($tasks);
    }

    /**
     * Get tasks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    public function __toString() 
    {
        return $this->getName() ? $this->getName() : ""; 
    }
    /**
     * @var string
     */
    private $description;


    /**
     * Set description
     *
     * @param string $description
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function setActiveTasks($tas)
    {
        $this->active_tasks = $tas;
    }

    public function getActiveTasks()
    {
        return $this->active_tasks;
    }
}
