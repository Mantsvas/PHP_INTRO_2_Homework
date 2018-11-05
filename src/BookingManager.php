<?php

namespace Nfq\Akademija;

use Nfq\Akademija\Room;
use Nfq\Akademija\Guest;
use Nfq\Akademija\Reservation;

class BookingManager
{
    public static function bookRoom(Room $room,Reservation $reservation)
    {
        $room->addReservation($reservation);
        $roomNumber = $room->getRoomNumber();
        $guest = $reservation->getGuest();
        $guestName = $guest->getFirstName().' '.$guest->getLastName();
        $startDate = $reservation->getStartDate();
        $endDate =  $reservation->getEndDate();
        echo "Room <strong>$roomNumber</strong> succesfully booked for <strong>$guestName</strong> from <time>$startDate</time> to <time>$endDate</time>! <br>";
    }
}
