<?php 
require_once('./assets/configuration/config.php');
?>

<html>
<!-- heading  -->

<head>
    <link rel="stylesheet" href="./assets/css/header.css" />
    <link rel="stylesheet" href="./assets/css/getUsersTicketDetails.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,100&display=swap" rel="stylesheet" />
    <!-- <head>NewEnergy Theme</head> -->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" />
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous" />

<body>

    <!-- Nav -->
    <div id="headerNavigation">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a href="#">
                <span class="eticket-span">E-Ticket</span>
            </a>
            <button id="navButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tickets.php">Ticket</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="help.php">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
                <button class="btn"  type="submit">Get Started</button>

            </div>
        </nav>
    </div>