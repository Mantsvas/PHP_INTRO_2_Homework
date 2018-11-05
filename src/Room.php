<?php

namespace Nfq\Akademija;

use Nfq\Akademija\ReservableInterface;
use Nfq\Akademija\Exceptions\ReservationException;

class Room implements ReservableInterface
{
    /**
     * @var string
     */
    protected $roomType;

    /**
     * @var bool
     */
    protected $restroom;

    /**
     * @var bool
     */
    protected $balcony;

    /**
     * @var int
     */
    protected $bedCount;

    /**
     * @var int
     */
    protected $roomNumber;

    /**
     * @var string
     */
    protected $extras;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var array
     */
    protected $reservations = [];

    /**
     * @return string
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param string $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * @return bool
     */
    public function isRestroom()
    {
        return $this->restroom;
    }

    /**
     * @param bool $restroom
     */
    public function setRestroom($restroom)
    {
        $this->restroom = $restroom;
    }

    /**
     * @return bool
     */
    public function isBalcony()
    {
        return $this->balcony;
    }

    /**
     * @param bool $balcony
     */
    public function setBalcony($balcony)
    {
        $this->balcony = $balcony;
    }

    /**
     * @return int
     */
    public function getBedCount()
    {
        return $this->bedCount;
    }

    /**
     * @param int $bedCount
     */
    public function setBedCount($bedCount)
    {
        $this->bedCount = $bedCount;
    }

    /**
     * @return int
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * @param int $roomNumber
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;
    }

    /**
     * @return string
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param string $extras
     */
    public function setExtras($extras)
    {
        $this->extras = $extras;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function addReservation($reservation)
    {
        if($this->checkIfReservationTimeIsAvailable($reservation))
        {
            throw new ReservationException("This time is already reserved");
        } else {
            array_push($this->reservations,$reservation);
        }
    }

    public function removeReservation($reservation)
    {
        $key = array_search($reservation,$this->reservations);
        unset($this->reservations[$key]);
        array_values($this->reservations);
    }

    public function checkIfReservationTimeIsAvailable($newReservation) :bool
    {
        foreach ($this->reservations as $reservation) {
            if ($newReservation->getStartDate() >= $reservation->getStartDate() && $newReservation->getStartDate() <= $reservation->getEndDate()) {
                return true;
            } elseif ($newReservation->getEndSDate() >= $reservation->getStartDate() && $newReservation->getEndDate() <= $reservation->getEndDate()) {
                return true;
            }
        }
        return false;
    }

    public function __toString()
    {
        $extras = \implode(', ',$this->extras);
        $reservations = \implode(', ',$this->reservations);
        return "Room {<br> roomType => $this->roomType <br> restroom => $this->restroom <br> balcony => $this->balcony <br> bedcount => $this->bedCount <br> roomNumber => $this->roomNumber <br>
            extras => $extras <br> price => $this->price <br> reservations => $reservations }<br>";
    }

}
