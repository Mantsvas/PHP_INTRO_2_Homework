<?php

namespace Nfq\Akademija;

use Nfq\Akademija\Room;

class Apartment extends Room
{
    public function __construct($room,$price)
    {
        $this->roomType = "Diamond";
        $this->restroom = True;
        $this->balcony = True;
        $this->bedCount = 4;
        $this->roomNumber = $room;
        $this->extras = "TV, air-contitionier, refrigerator, mini-bar, bathtub, free Wi-Fi";
        $this->price = $price;
    }

    public function __toString()
    {
        $reservations = \implode(', ',$this->reservations);
        return "Apartment {<br> roomType => $this->roomType <br> restroom => $this->restroom <br> balcony => $this->balcony <br> bedcount => $this->bedCount <br> roomNumber => $this->roomNumber <br>
            extras => $this->extras <br> price => $this->price <br> reservations => $reservations }<br>";
    }
}