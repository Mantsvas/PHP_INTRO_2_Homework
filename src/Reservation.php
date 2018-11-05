<?php

namespace Nfq\Akademija;

use Nfq\Akademija\Guest;

class Reservation
{
    private $startDate;
    private $endDate;
    private $guest;

    public function __construct(\DateTime $startDate, \DateTime $endDate, Guest $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate->format('Y-m-d');
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate->format('Y-m-d');
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * @param mixed $guest
     */
    public function setGuest(Guest $guest)
    {
        $this->guest = $guest;
    }

    public function __toString()
    {
        $startDate = $this->getStartDate();
        $endDate = $this->getEndDate();
        return "{startDate => $startDate, endDate => $endDate, guest => $this->guest}";
    }
}