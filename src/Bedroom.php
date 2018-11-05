<?php

namespace Nfq\Akademija;

use Nfq\Akademija\Room;

class Bedroom extends Room
{
    public function __construct($room,$price)
    {
        $this->roomType = "Gold";
        $this->restroom = True;
        $this->balcony = True;
        $this->bedCount = 2;
        $this->roomNumber = $room;
        $this->extras = "TV, air-contitionier, refrigerator, mini-bar, bathtub";
        $this->price = $price;
    }

    public function __toString()
    {
        $reservations = \implode(', ',$this->reservations);
        return "BedRoom {<br> roomType => $this->roomType <br> restroom => $this->restroom <br> balcony => $this->balcony <br> bedcount => $this->bedCount <br> roomNumber => $this->roomNumber <br>
            extras => $this->extras <br> price => $this->price <br> reservations => $reservations }<br>";
    }
}