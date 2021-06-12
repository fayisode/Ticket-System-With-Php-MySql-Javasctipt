<?php
// importing the required library 
require_once("./includes/header.php");
require_once("./includes/classes/ticketUploadData.php");
require_once("./includes/classes/inputProcessor.php");
//checking the button 
if (!isset($_POST["ticketButton"])) {
    echo "No file sent to page.";
    exit();
}
// create the file upload data 
$ticketInputDate = new TicketUploadData(
    $_POST["destinationFrom"],
    $_POST["destinationTo"],
    $_POST["returns"],
    $_POST["departure"],
    $_POST["departureTime"],
    $_POST["departureDate"],
    $_POST["returnTime"],
    $_POST["returnDate"],
    $_POST["occupant"],
    $_POST["ticketCategories"],
);
// process the file data 

?>

<div id='row-flex'>

    <div class="column titleColumn">
        <h1 id="processingHeader" style="margin-top: 12rem;">
            <?php
            $inputProcessor = new InputProcessor(connection: $connection);
            $wasSuccessful = $inputProcessor->upload($ticketInputDate);
            if ($wasSuccessful ) {
                $isValidData = $inputProcessor->insertTicketData($ticketInputDate);
            }
            ?>
        </h1>
        <div id="processingButton" style="margin-top: 2rem;">
            <form action='../screen/index.php'> <button id='ticketButton' class='btn' type='submit'>Go To Homess</button> </form>
        </div>
    </div>


    <div class="imageBar" id="processingImageBar"> <img src='../assets/images/contact-us-image.svg' alt='My Happy SVG' /> </div>
</div>


<?php
// importing the required library 
require_once("./includes/footer.php")
?>