

<?php

require "databaseclasses/Users.php";
require "databaseclasses/Receipts.php";

//get info depending on the request
//make sure to authenticate!!!

if (isset($_GET['table'])) {
    $table = $_GET['table'];
    //echo 'Your selected table is: ' . $table . '<br>';

    if($table === "u"){
        //echo 'Fetching users table...';
        $users = new Users();
        if(isset($_GET['userid'])){
            $result = $users->read($_GET['userid']);
        }else {
            $result = $users->read();
        }
        $result = json_encode($result);
        echo $result;
    }

    if($table === "r"){
        //echo 'Fetching receipts table...';
        $receipts = new Receipts();
        $result = $receipts->read($_GET['userid']);
        $result = json_encode($result);
        echo $result;
    }

}

?>



