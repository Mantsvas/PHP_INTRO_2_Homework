<?php

namespace Nfq\Akademija;

use Nfq\Akademija\Room;

class SingleRoom extends Room
{
    public function __construct($room,$price)
    {
        $this->roomType = "Standart";
        $this->restroom = True;
        $this->balcony = False;
        $this->bedCount = 1;
        $this->roomNumber = $room;
        $this->extras = "TV, air-contitionier";
        $this->price = $price;
    }

    public function __toString()
    {
        $reservations = \implode(', ',$this->reservations);
        return "SingleRoom {<br> roomType => $this->roomType <br> restroom => $this->restroom <br> balcony => $this->balcony <br> bedcount => $this->bedCount <br> roomNumber => $this->roomNumber <br>
            extras => $this->extras <br> price => $this->price <br> reservations => $reservations }<br>";
    }
}
