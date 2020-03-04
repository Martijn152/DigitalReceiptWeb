<?php
include "view/docStart.php";
include "view/header.php";
?>



<?php

require "Users.php";

$users = new Users();


var_dump($users->get('1941'));
/*var_dump($users->insert([
    '1' => 'John'
]));*/


?>



<?php
include "view/footer.php";
include "view/docEnd.php";
?>
