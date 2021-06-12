<?php
class TicketUploadData
{
    public $destinationFrom, $destinationTo, $returns, $departure, $departureTime, $departureDate, $returnTime, $returnDate, $occupant, $ticketCategories;

    public function __construct(
        $destinationFrom,
        $destinationTo,
        $returns,
        $departure,
        $departureTime,
        $departureDate,
        $returnTime,
        $returnDate,
        $occupant,
        $ticketCategories
    ) {
        $this->destinationFrom = $destinationFrom;
        $this->destinationTo = $destinationTo;
        if ($returns == "on") {
            $this->returns = $returns;
        } else {
            $this->returns = 'off';
        }
        if ($departure == "on") {
            $this->departure = $departure;
        } else {
            $this->departure = 'off';
        }
        $this->departureTime = $departureTime;
        $this->departureDate = $departureDate;
        $this->returnTime = $returnTime;
        $this->returnDate = $returnDate;
        $this->occupant = $occupant;
        $this->ticketCategories = $ticketCategories;
    }
}
