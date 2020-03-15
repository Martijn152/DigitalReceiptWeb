<?php
include "view/docStart.php";
include "view/header.php";
?>

<style>
    body {
        background-image: url("img/light.jpg");
        background-size: cover
    }


</style>


<div class="w3-container w3-content w3-center w3-padding-64">
    <h2>Introduction</h2>
    <p>
        Receipts for the sale of goods and services are an essential part of commerce. They contain information including
        the date of supply, details on the product or service, the price, any taxes applied and the method of payment, and
        are a legal requirement for businesses to provide in several countries.
    </p>
    <p>
        Swedish law (Law 2007: 592, Section 9) states specifically:
    </p>
    <p style="font-style: italic">
        At each sale, a receipt made by the cash register shall be produced and offered to the customer.
    </p>
    <p>
        However, in every day life neglible thought is generally given to the volume, production and disposal of paper
        receipts. For more extensive research on the topic, please have a look at our <a href="paper.pdf">paper</a>.
    </p>

    <h2>The Digital Receipt System</h2>
    <p>
        We therefore present the digital receipt system. The system includes three main components: The Payment Terminal,
        The Mobile Application, and The Web Application. The system works as follows: The customer finishes a transaction and opts to receive a digital receipts at the cash register. The Payment Terminal will then generate the receipt and enable a scanner.
    </p>
    <img src="/img/payment-terminal.PNG" alt="payment-terminal" style="width:600px;height:300px;">
    <p>
        The customer will open their Mobile Application and select the QR-code button. This will display their personalized QR code for receiving receipts. The customer will hold the QR code in front of the scanner and the receipt will be sent to the database and linked to the user.
    </p>
    <img src="/img/mobile-app.PNG" alt="mobile-app" style="width:600px;height:300px;">
    <p>
        The Web Application allows users to browse and download their receipts. It also has several functions meant for administrators, such as managing users.
    </p>
</div>



<?php
include "view/footer.php";
include "view/docEnd.php";
?>
