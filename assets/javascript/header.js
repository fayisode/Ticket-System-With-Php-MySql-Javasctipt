var button = document.getElementById("navButton");
function topNavigator() {
  button.addEventListener("click", function () {
    var x = document.getElementById("navbarSupportedContent");
    if (x.className === "topnav responsive") {
      x.className = "collapse navbar-collapse";
    } else {
      x.className = "topnav responsive";
    }
  });
}

function ChangeProcessingImage() {
  processingImageBar = document.getElementById("processingImageBar");
  //   processingButton = document.getElementById("processingButton");
  failedValidation =
    "<img src='./assets/images/failure.svg' alt='My Happy SVG' />";
  failedValidationButton =
    " <form  action='index.php'> <button id='ticketButton' class='btn' type='submit'>Go To Home</button> </form>";

  successValidation =
    "<img src='./assets/images/success.svg' alt='My Happy SVG' />";
  successValidationButton =
    "<form  action='tickets.php'> <button id='ticketButton' class='btn' type='submit'>Go To Ticket</button></form>";
  headerText = document.getElementById("processingHeader");
  if (headerText.innerText === "Successful") {
    console.log(processingButton.innerHTML);
    processingImageBar.innerHTML = successValidation;
    processingButton.innerHTML = successValidationButton;
    console.log(processingButton.innerHTML);
  } else {
    processingImageBar.innerHTML = failedValidation;
    console.log(processingButton.innerHTML);
    processingButton.innerHTML = failedValidationButton;
  }
}

topNavigator();

ChangeProcessingImage();
