<?php
require_once("includes/header.php");
require_once("includes/classes/getUsersTicketDetails.php");
?>

<div class="row">
    <div class="column titleColumn">

        <?php
        $formProvider = new GetUsersTicketDetails(connection: $connection);
        echo $formProvider->createTicketForm();
        ?>
    </div>

    <?php
    $formProvider = new GetUsersTicketDetails(connection: $connection);
    echo $formProvider->sideImageBar();
    ?>

</div>



<?php
require_once("includes/footer.php");
?>