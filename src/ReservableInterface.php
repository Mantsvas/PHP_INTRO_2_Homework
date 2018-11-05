<?php

namespace Nfq\Akademija;

interface ReservableInterface
{
    public function addReservation($reservation);
    public function removeReservation($reservation);
}
