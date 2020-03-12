<?php

require "databaseclasses/Users.php";
require "databaseclasses/Receipts.php";

//get info depending on the request
//make sure to authenticate!!!

if (isset($_GET['table'])) {
    $table = $_GET['table'];
    //echo 'Your selected table is: ' . $table . '<br>';

    if ($table === "u") {
        //echo 'Fetching users table...';
        $users = new Users();
        if (isset($_GET['userid'])) {
            $result = $users->read($_GET['userid']);
        } else {
            $result = $users->read();
        }
        $result = json_encode($result);
        echo $result;
    }

    if ($table === "r") {
        //echo 'Fetching receipts table...';
        $receipts = new Receipts();
        $result = $receipts->read($_GET['userid']);
        $result = json_encode($result);
        echo $result;
    }


}

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action === "c") {
        //echo 'Creating new user';
        //THIS IS INSANELY MESSY SINCE ITS A GET REQUEST, NOT A POST
        $users = new Users();
        if (isset($_GET['id']) && isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['dateofbirth']) && isset($_GET['password'])) {
            $user = new User($_GET['firstname'],$_GET['lastname'],$_GET['dateofbirth'],$_GET['id']);
            $user->setPassword($_GET['password']);
            $users->create($user);
            echo "Succes!";
        } else {
            echo "Something went wrong.";
        }
    }

    if ($action === "u") {
        //echo 'Creating new user';
        //THIS IS INSANELY MESSY SINCE ITS A GET REQUEST, NOT A POST
        $users = new Users();
        if (isset($_GET['id']) && isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['dateofbirth']) && isset($_GET['password'])) {
            $user = new User($_GET['firstname'],$_GET['lastname'],$_GET['dateofbirth'],$_GET['id']);
            $user->setPassword($_GET['password']);
            $users->update($user->getId(),$user);
            echo "Succes!";
        } else {
            echo "Something went wrong.";
        }
    }

    if ($action === "d") {
        //echo 'Creating new user';
        //THIS IS INSANELY MESSY SINCE ITS A GET REQUEST, NOT A POST
        $users = new Users();
        if (isset($_GET['id'])) {
            $users->delete($_GET['id']);
            echo "Succes!";
        } else {
            echo "Something went wrong.";
        }
    }
}

?>



