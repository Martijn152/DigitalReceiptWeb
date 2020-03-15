<link rel="stylesheet" href="css/login.css">
<?php
include "view/docStart.php";
include "view/header.php";
?>

<div class="login_box">

    <h1>Login</h1>
    <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Username" name="" value="">
    </div>

    <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Password" name="" value="">
    </div>

    <input class="btn" type="button" name="" value="Login" onclick="login()">

</div>

<?php
include "view/footer.php";
include "view/docEnd.php";
?>

<script type="text/javascript" src="js/login.js"></script>



