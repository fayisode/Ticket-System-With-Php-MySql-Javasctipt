<?php
require_once("./includes/header.php");
?>


<section>
    <div id="ticketContainer">
        <p>Id</p>
        <p>Destination From</p>
        <p>Destiantion To</p>
        <p>Returns</p>
        <p>Departure</p>
        <p>Departure Time</p>
        <p>Departure Date</p>
        <p>Return Time</p>
        <p>Return Date</p>
        <p>Occupant</p>
        <p>Ticket Category</p>
    </div>

    <?php
    $query = $connection->prepare("SELECT * FROM `etickets` WHERE 1");
    $query->execute();

    //if ($query->fetch(PDO::FETCH_ASSOC)) {
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $html = "<div id='ticketContainer'>";
        $id = $row["id"];
        $destinationFrom = $row["destinationFrom"];
        $destinationTo = $row["destinationTo"];
        $returns = $row["returns"];
        $departure = $row["departure"];
        $departureTime = $row["departureTime"];
        $departureDate = $row["departureDate"];
        $returnTime = $row["returnTime"];
        $returnDate = $row["returnDate"];
        $occupant = $row["occupant"];
        $ticketCategories = $row["ticketCategories"];

        $html .= "<p>$id </p>";
        $html .= "<p>$destinationFrom </p>";
        $html .= "<p>$destinationTo </p>";
        $html .= "<p>$returns </p>";
        $html .= "<p>$departure </p>";
        $html .= "<p>$departureTime </p>";
        $html .= "<p>$departureDate </p>";
        $html .= "<p>$returnTime </p>";
        $html .= "<p>$returnDate </p>";
        $html .= "<p>$occupant </p>";
        $html .= "<p>$ticketCategories </p>";
        $html .= "</div>";
        echo $html;
    }
    // } else {
    //     echo "<h1 style= '  margin-left: 15rem;  margin-top: 15rem;'>No ticket, Kindly Go to the home page</h1>";
    // }


    ?>
</section>


<?php
require_once("./includes/footer.php");
?>