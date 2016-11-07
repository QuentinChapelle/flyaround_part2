<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flight
 */
class Flight
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $departure;

    /**
     * @var string
     */
    private $arrival;

    /**
     * @var string
     */
    private $pilot;

    /**
     * @var int
     */
    private $freeSeats;

    /**
     * @var \DateTime
     */
    private $takeofTime;


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
     * Set departure
     *
     * @param string $departure
     * @return Flight
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return string 
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param string $arrival
     * @return Flight
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return string 
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set pilot
     *
     * @param string $pilot
     * @return Flight
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return string 
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Set freeSeats
     *
     * @param integer $freeSeats
     * @return Flight
     */
    public function setFreeSeats($freeSeats)
    {
        $this->freeSeats = $freeSeats;

        return $this;
    }

    /**
     * Get freeSeats
     *
     * @return integer 
     */
    public function getFreeSeats()
    {
        return $this->freeSeats;
    }

    /**
     * Set takeofTime
     *
     * @param \DateTime $takeofTime
     * @return Flight
     */
    public function setTakeofTime($takeofTime)
    {
        $this->takeofTime = $takeofTime;

        return $this;
    }

    /**
     * Get takeofTime
     *
     * @return \DateTime 
     */
    public function getTakeofTime()
    {
        return $this->takeofTime;
    }
    /**
     * @var \CoavBundle\Entity\PlaneModel
     */
    private $planeModel;

    /**
     * @var \CoavBundle\Entity\Flight
     */
    private $Flight;


    /**
     * Set planeModel
     *
     * @param \CoavBundle\Entity\PlaneModel $planeModel
     * @return Flight
     */
    public function setPlaneModel(\CoavBundle\Entity\PlaneModel $planeModel = null)
    {
        $this->planeModel = $planeModel;

        return $this;
    }

    /**
     * Get planeModel
     *
     * @return \CoavBundle\Entity\PlaneModel 
     */
    public function getPlaneModel()
    {
        return $this->planeModel;
    }

    /**
     * Set Flight
     *
     * @param \CoavBundle\Entity\Flight $flight
     * @return Flight
     */
    public function setFlight(\CoavBundle\Entity\Flight $flight = null)
    {
        $this->Flight = $flight;

        return $this;
    }

    /**
     * Get Flight
     *
     * @return \CoavBundle\Entity\Flight 
     */
    public function getFlight()
    {
        return $this->Flight;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ids;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ids = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ids
     *
     * @param \WCS\CoavBundle\Entity\Reservation $ids
     * @return Flight
     */
    public function addId(\WCS\CoavBundle\Entity\Reservation $ids)
    {
        $this->ids[] = $ids;

        return $this;
    }

    /**
     * Remove ids
     *
     * @param \WCS\CoavBundle\Entity\Reservation $ids
     */
    public function removeId(\WCS\CoavBundle\Entity\Reservation $ids)
    {
        $this->ids->removeElement($ids);
    }

    /**
     * Get ids
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIds()
    {
        return $this->ids;
    }
    /**
     * @var \WCS\CoavBundle\Entity\Terrain
     */
    private $plane;


    /**
     * Set plane
     *
     * @param \WCS\CoavBundle\Entity\Terrain $plane
     * @return Flight
     */
    public function setPlane(\WCS\CoavBundle\Entity\Terrain $plane = null)
    {
        $this->plane = $plane;

        return $this;
    }

    /**
     * Get plane
     *
     * @return \WCS\CoavBundle\Entity\Terrain 
     */
    public function getPlane()
    {
        return $this->plane;
    }
}
