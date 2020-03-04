<?php
include "view/docStart.php";
include "view/header.php";
?>



<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/digital-receipt-a6570-firebase-adminsdk-ohqny-d2c73c72f0.json');
$firebase = (new Factory)
   ->withServiceAccount($serviceAccount)
   ->withDatabaseUri('https://my-project.firebaseio.com')
   ->create();
$database = $firebase->getDatabase();
var_dump($database);
?>



<?php
include "view/footer.php";
include "view/docEnd.php";
?>
