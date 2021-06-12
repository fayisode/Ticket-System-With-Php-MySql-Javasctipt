<?php

class InputProcessor
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    // Upload 

    public function upload($ticketInputDate)
    {


        // Validator variables 
        $isValidData = $this->processData($ticketInputDate);
        if (!$isValidData) {
            return false;
        }
    
    }

    // process data 
    public function processData($ticketInputDate)
    {
        // Ticket variables declaration 
        $destinationFrom = $ticketInputDate->destinationFrom;
        $destinationTo = $ticketInputDate->destinationTo;
        $returns = $ticketInputDate->returns;
        $departure = $ticketInputDate->departure;
        $departureTime = $ticketInputDate->departureTime;
        $departureDate = $ticketInputDate->departureDate;
        $returnTime = $ticketInputDate->returnTime;
        $returnDate = $ticketInputDate->returnDate;
        $occupant = $ticketInputDate->occupant;
        $ticketCategories = $ticketInputDate->ticketCategories;

        // Validator variables 
        if (!$this->isValidType($destinationFrom)) {
            echo "Invalid destination form input";
            return false;
        } else if (!$this->isValidType($destinationTo)) {
            echo "Invalid destination to input";
            return false;
        } else if (!$this->isValidCheckBox($returns, $departure)) {
            echo "Invalid input, specify whether its a return or departure";
            return false;
        } else if (!$this->isValidType($departureTime)) {
            echo "Invalid departure time input";
            return false;
        } else if (!$this->isValidType($departureDate)) {
            echo "Invalid departure date input";
            return false;
        } else if (!$this->isValidType($returnTime)) {
            echo "Invalid return time input";
            return false;
        } else if (!$this->isValidType($returnDate)) {
            echo "Invalid return date input";
            return false;
        } else if (!$this->isValidType($occupant)) {
            echo "Invalid departure time input";
            return false;
        } else if (!$this->isValidCategoryType($ticketCategories)) {
            echo "Invalid departure time input";
            return false;
        } else {
            echo "Successful";
        }
    }
    // Validators 
    private function isValidType($type)
    {
        $validator = $type !== null && strlen($type) > 0  && (is_string($type)  == 1);
        return $validator;
    }
    private function isValidCategoryType($type)
    {
        $validator = $type > 0;
        return $validator;
    }

    private function isValidCheckBox($type1, $type2)
    {
        $validator = $type1 == 'on' || $type2 == 'on';
        return $validator;
    }



    // Mysql connector 
    public function insertTicketData($ticketInputDate)
    {
        $query = $this->connection->prepare("INSERT INTO `etickets`(`destinationFrom`, destinationTo, returns, departure, departureTime, departureDate,
                                            returnTime,returnDate, occupant, ticketCategories
                                        ) 
                                            VALUES (:destinationFrom, :destinationTo, :returns, :departure, :departureTime, :departureDate, 
                                            :returnTime,:returnDate,:occupant, :ticketCategories
                                                )");

        $query->bindParam(':destinationFrom', $ticketInputDate->destinationFrom);
        $query->bindParam(':destinationTo', $ticketInputDate->destinationTo);
        $query->bindParam(':returns', $ticketInputDate->returns);
        $query->bindParam(":departure", $ticketInputDate->departure);
        $query->bindParam(":departureTime", $ticketInputDate->departureTime);
        $query->bindParam(":departureDate", $ticketInputDate->departureDate);
        $query->bindParam(":returnTime", $ticketInputDate->returnTime);
        $query->bindParam(":returnDate", $ticketInputDate->returnDate);
        $query->bindParam(":occupant", $ticketInputDate->occupant);
        $query->bindParam(":ticketCategories", $ticketInputDate->ticketCategories);

        return $query->execute();
    }
}
