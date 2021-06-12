<?php
class GetUsersTicketDetails
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function createTicketForm()
    {
        $destinationInput = $this->createDestinationInput();
        $dateInput = $this->createDepartureDateTimeInput();
        $labelInput = $this->createDestinationTypeInput();
        $timeInput = $this->createReturnDateTimeInput();
        $occupantInput = $this->createOccupantInput();
        $categoriesInput = $this->createCategoriesInput();
        $createTicketButton = $this->createTicketButton();
        return "
        <span class='titleHeader'>Book Your </span> 
        <br>
        <span class='titleHeader'>Destination Ticket Now</span>
        <form action='./processing.php' method='POSt'>
        $destinationInput
        $labelInput
        $dateInput
        $timeInput
        $occupantInput
        $categoriesInput
        $createTicketButton
        </form>
        ";
    }

    public function createDestinationInput()
    {
        return "
        <div class='form-group form-groups'>
        <div class='formFlexDisplay2'><label for='destination'>Destination From</label>
        <input type='text' name='destinationFrom'  class='form-control' id='inputsForm' aria-describedby='emailHelp' placeholder='Enter destiantion from'></div>
        <div class='mr-3'></div>
        <div class='formFlexDisplay1'><label for='destination'>Destination To</label>
        <input type='text' name='destinationTo' class='form-control' id='inputsForm' aria-describedby='emailHelp' placeholder='Enter destination to'></div>
        </div>
        ";
    }
    public function createDestinationTypeInput()
    {
        return "
        <div id = 'desTypeCheckBox' class='form-group' >
        <div><label for='destinationType'> Return </label><input class = 'ml-3'type = 'checkbox' name= 'returns'></div>
        <div><label for='destinationType'> Departure </label><input class = 'ml-3' type = 'checkbox' name= 'departure'> </div>
        </div>
        ";
    }
    public function createDepartureDateTimeInput()
    {
        return "
        <div class='form-group form-groups'>
        <div class='formFlexDisplay1'><label for='departureTime'>Departure Time</label> <br>
        <input class='form-control' type='time' id='departureTime' name='departureTime'></div>
        <div class='mr-3'></div>
        <div class='formFlexDisplay2'><label for='departureDate'>Departure Date</label> <br>
        <input class='form-control' type='date' id='departureDate' name='departureDate'></div>
        </div>
        ";
    }

    public function createReturnDateTimeInput()
    {
        return "
        <div class='form-group form-groups'>
        <div class='formFlexDisplay2'><label for='returnTime'>Return Time</label> <br>
        <input class='form-control' type='time' id='returnTime' name='returnTime'></div>
        <div class='mr-3'></div>
        <div class='formFlexDisplay1'><label for='returnDate'>Return Date</label> <br>
        <input class='form-control' type='date' id='returnDate' name='returnDate'></div>
        </div>
        ";
    }
    public function createOccupantInput()
    {
        return "
        <div class='form-group'>
        <label for='occupant'>Occupant</label>
        <input type='number' name='occupant' class='form-control' id='inputsForm' aria-describedby='emailHelp' placeholder='Enter occupant number'>
        </div>
        ";
    }
    public function createTicketButton()
    {
        return "
        <div class='form-group'>
        <button id='ticketButton' name='ticketButton' class='btn' type='submit'>Create Ticket</button>
        </div>
        ";
    }

    public function sideImageBar()
    {
        return  "<div style= 'margin-top: 0'> <img src='./assets/images/sideImage.svg' style = 'height: 800px;
        width: 700px; margin-top:5rem'alt='My Happy SVG' /> </div>";
    }


    public function createCategoriesInput(){
        $query = $this->connection->prepare("SELECT * FROM categories");
        $query->execute();

        $html = "<div class='form-group'>
        <label for='occupant'>Ticket Categories</label>
        <select class='form-control' name='ticketCategories'>";

        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $id = $row["id"];
            $name = $row["name"];

            $html .= "<option value='$id'>$name</option>";
        }
        
        $html .= "</select>
                </div>";

        return $html;
    }

}
