<?php
include "view/docStart.php";
include "view/header.php";
?>



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


<?php
include "view/footer.php";
include "view/docEnd.php";
?>
