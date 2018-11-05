<?php
require __DIR__ . '/vendor/autoload.php';

use Nfq\Akademija\SingleRoom;
use Nfq\Akademija\Guest;
use Nfq\Akademija\Reservation;
use Nfq\Akademija\BookingManager;
// Test differrent Room
// use Nfq\Akademija\Bedroom;
// use Nfq\Akademija\Apartment;


$room = new SingleRoom(1408,99);
$guest = new Guest("Vardenis","Pavardenis");

$startDate = new \DateTime("2018-11-01");
$endDate = new \DateTime("2018-11-05");
$reservation = new Reservation($startDate, $endDate, $guest);

BookingManager::bookRoom($room,$reservation);


// Test different Room
// $room2 = new Bedroom(1409,200);
// $room3 = new Apartment(1410,500);
// BookingManager::bookRoom($room2,$reservation);
// BookingManager::bookRoom($room3,$reservation);

// use magic method toString
// echo "<br>".$room;

// BONUS To get Exception
// BookingManager::bookRoom($room,$reservation);
