
<?php
include "view/docStart.php";
include "view/header.php";
?>

<div class="about-section">
    <h1>About</h1>
    <div class="text">
        <p> In every day life neglible thought is generally given to the volume, production
            and disposal of paper receipts. Research indicates that around 80% of the US populace (261
            million people) is given one to three paper receipts per day, 11% of which are disposed of
            at the point of sale. As a result, over 3 million trees and 34 billion litres of water are
            consumed each year in the creation of paper receipts, generating 137 billion kilograms of
            solid waste and 1.81 billion kilograms of carbon dioxide. Paper products fill over one
            quarter of all solid waste in landfills, including receipts.
        </p>
        <p>The goal of the project is to assist industry and customers to adopt a less wasteful and more
            environmentally friendly proof-of-purchase option in the form of a digital receipt system.</p>
    </div>
</div>

<div class="team">
    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="img/martijn.jpg" alt="Martijn" style="width:100%">
                <div class="container">
                    <h2>Martijn de Redelijkheid</h2>
                    <p>Martijn is a third year student of the Software Development programme at HKR. He is interested in Computer Security and has worked mostly on the back-end and client-side functional code for this project.</p>

                </div>
            </div>
        </div>
        <div class="column1">
            <div class="card">
                <img src="img/kristian.jpg" alt="Kristian" style="width:100%">
                <div class="container">
                    <h2>Kristian Kokoneshi</h2>
                    <p>Kristian is an alumni at Kristianstad University, currently in his final year of studies in Bc.S Softare Development. His hobbies include movies, music, programming and sports. He contributed to the front end development of this project as well on some part of the back-end part.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

require "databaseclasses/Users.php";
require "databaseclasses/Receipts.php";

$users = new Users();
$receipts = new Receipts();

//Test function calls --------------------------------------------------

//Reading data from the cloud firestore database
//Reading all users
//var_dump($users->read());
//Reading a specific user
//var_dump($users->read("bobdylan@bob.com"));

//Creating a new user
//$user = new User("Steven","Tyler","1948","steven@tyler.com");
//var_dump($users->create($user));

//Updating a user
//$user = new User("Steven","Tyler","1948","steven@tyler.com");
//var_dump($users->update("steven@tyler.com",$user));

//Deleting a user
//var_dump($users->delete("steven@tyler.com"));

//Reading all receipts of a user
//var_dump($receipts->read('bobdylan@bob.com'));

//----------------------------------------------------------------------
?>

<link rel="stylesheet" href="css/about.css">

<?php
include "view/footer.php";
include "view/docEnd.php";
?>
