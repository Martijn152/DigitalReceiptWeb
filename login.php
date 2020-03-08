<?php
include "view/docStart.php";
include "view/header.php";
?>

<label for="username"><b>Username</b></label>
<input id ="username" type="text" placeholder="Username" name="username" required><br>
<label for="password"><b>Password</b></label>
<input id ="password" type="password" placeholder="Password" name="password" required><br>

<button onclick="login()">Login</button>

<?php
include "view/footer.php";
include "view/docEnd.php";
?>

<script type="text/javascript" src="js/login.js"></script>



