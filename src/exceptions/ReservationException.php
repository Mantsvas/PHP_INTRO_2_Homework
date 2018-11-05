<?php

namespace Nfq\Akademija\Exceptions;

class ReservationException extends \Exception
{
    function __construct($message)
    {
        parent::__construct($message);
    }
}
