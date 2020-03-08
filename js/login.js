







//some login data
//username: user@user.com
//pw: useruser

function login(){
    var usernameField = document.getElementById("username");
    var passwordField = document.getElementById("password");

    firebase.auth().signInWithEmailAndPassword(usernameField.value, passwordField.value).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorCode);
        console.log(errorMessage);
    });

    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            window.location.href = "about.php";
        } else {

        }
    });
}



